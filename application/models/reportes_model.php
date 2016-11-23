<?php
class Reportes_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('canje_efectivo_model');
    }
	public $CONDICION = '2016-10-01';
    public function cuentaXcliente($codigo,$f1,$f2)
    {
    	$query="";
        $q_rows = $this->db->query("call pc_Clientes_Facturas ('".$codigo."')");
        if ($q_rows->num_rows() > 0) {
            $query = "SELECT FACTURA,FECHA,SUM(TT_PUNTOS) AS PUNTOS FROM vtVS2_Facturas_CL WHERE CLIENTE='".$codigo."'
					AND FECHA BETWEEN '".$f1."' AND '".$f2."' AND FACTURA NOT IN(".$q_rows->result_array()[0]['Facturas'].")";
        }
        $q_rows->next_result();
        $q_rows->free_result();
        $q_rows = $this->db->query("call pc_Clientes_Facturas_Fre ('".$codigo."')");
        if ($q_rows->num_rows() > 0) {
            if ($query=="") {
                $query = "SELECT FACTURA,FECHA,SUM(TT_PUNTOS) AS PUNTOS FROM vtVS2_Facturas_CL WHERE CLIENTE='".$codigo."'
					AND FECHA BETWEEN '".$f1."' AND '".$f2."' AND FACTURA NOT IN (".$q_rows->result_array()[0]['Facturas'].") GROUP BY FACTURA, FECHA";
            }else{
                $query .= " AND FACTURA NOT IN (".$q_rows->result_array()[0]['Facturas'].") GROUP BY FACTURA, FECHA";
            }
        }
        
        if ($query==""){
            $query = "SELECT FACTURA,FECHA,SUM(TT_PUNTOS) AS PUNTOS FROM vtVS2_Facturas_CL WHERE CLIENTE='".$codigo."'
					AND FECHA BETWEEN '".$f1."' AND '".$f2."' AND FECHA >= '".$this->CONDICION."' GROUP BY FACTURA, FECHA ";
        }
        $q_rows->next_result();
        $q_rows->free_result();

    	$i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray($query,SQLSRV_FETCH_ASSOC);

        foreach($query as $key){
            $json['data'][$i]['FACTURA'] = "<p class='negra noMargen'>".$key['FACTURA']."</p>";
            $json['data'][$i]['FECHA'] = $key['FECHA']->format('d-m-Y');
            $json['data'][$i]['PUNTOS'] = number_format($key['PUNTOS'],0);
            $json['data'][$i]['APLICADOS'] = $this->getAplicado($key['FACTURA']);
            $json['data'][$i]['DISPONIBLE'] = $this->canje_model->getSaldoParcial($key['FACTURA'],$key['PUNTOS']);
            $i++;
        }
        echo json_encode($json);
        return $json;
        $this->sqlsrv->close();
    }

    public function getAplicado($FACTURA)
    {
    	$this->db->where('Factura',$FACTURA);
    	$query = $this->db->get('rfactura');
    	if ($query->num_rows()>0) {
    		if ($query->result_array()[0]['Puntos']>0) {
    			return $query->result_array()[0]['ttPuntos']-$query->result_array()[0]['Puntos'];
    		}
    		return $query->result_array()[0]['ttPuntos'];
    	}
    	return 0;
    }
    public function datosCliente($codigo)
    {
    	$i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT DIRECCION,RUC,CLIENTE,NOMBRE FROM vtVS2_Clientes WHERE CLIENTE = '".$codigo."' ",SQLSRV_FETCH_ASSOC);

        foreach($query as $key){
            $json['data']['DIRECCION'] = $key['DIRECCION'];
            $json['data']['RUC'] = $key['RUC'];
            $json['data']['CODIGO'] = $key['CLIENTE'];
            $json['data']['NOMBRE'] = $key['NOMBRE'];
            $i++;
        }
        echo json_encode($json);
        return $json;
        $this->sqlsrv->close();
    }
}