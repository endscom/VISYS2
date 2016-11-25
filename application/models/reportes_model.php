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
    public function masterClientes($fecha1,$fecha2)
    {
        $i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT CLIENTE,NOMBRE_CLIENTE,SUM(TT_PUNTOS) AS PUNTOS FROM vtVS2_Facturas_CL
                                            WHERE FECHA BETWEEN '".$fecha1."' AND '".$fecha2."' AND FECHA >= '".$this->CONDICION."'
                                            GROUP BY CLIENTE,NOMBRE_CLIENTE",SQLSRV_FETCH_ASSOC);
                                            
        foreach($query as $key){
            $json['data'][$i]['NUMERO'] = $i+1;
            $json['data'][$i]['CODIGO'] = $key['CLIENTE'];
            $json['data'][$i]['CLIENTE'] = $key['NOMBRE_CLIENTE'];
            $json['data'][$i]['PUNTOS'] = $key['PUNTOS'];
            $i++;
        }
            $json['columns'][0]['data'] = "NUMERO";
            $json['columns'][0]['name'] = "NUMERO";
            $json['columns'][1]['data'] = "CODIGO";
            $json['columns'][1]['name'] = "CODIGO";
            $json['columns'][2]['data'] = "CLIENTE";
            $json['columns'][2]['name'] = "CLIENTE";
            $json['columns'][3]['data'] = "PUNTOS";
            $json['columns'][3]['name'] = "PUNTOS";

        echo json_encode($json);
        $this->sqlsrv->close();
    }
    public function canjePremios($fecha1,$fecha2)
    {
        
    }
    public function masterFacturas($fecha1,$fecha2)
    {
        $i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT FECHA,FACTURA,CLIENTE,NOMBRE_CLIENTE,SUM(TT_PUNTOS) AS PUNTOS  FROM vtVS2_Facturas_CL
                                            WHERE FECHA BETWEEN '".$fecha1."' AND '".$fecha2."' AND FECHA >= '".$this->CONDICION."'
                                            GROUP BY FACTURA,FECHA,CLIENTE,NOMBRE_CLIENTE",SQLSRV_FETCH_ASSOC);
                                            
        foreach($query as $key){
            $json['data'][$i]['FACTURA'] = $key['FACTURA'];
            $json['data'][$i]['CODIGO'] = $key['CLIENTE'];
            $json['data'][$i]['CLIENTE'] = $key['NOMBRE_CLIENTE'];
            $json['data'][$i]['PUNTOS'] = $this->canje_model->getSaldoParcial($key['FACTURA'],$key['PUNTOS']);
            $json['data'][$i]['ESTADO'] = ($json['data'][$i]['PUNTOS']==0) ? "APLICADO" : "ACTIVO";
            $i++;
        }
            $json['columns'][0]['data'] = "FACTURA";
            $json['columns'][0]['name'] = "FACTURA";
            $json['columns'][1]['data'] = "CODIGO";
            $json['columns'][1]['name'] = "CODIGO";
            $json['columns'][2]['data'] = "CLIENTE";
            $json['columns'][2]['name'] = "CLIENTE";
            $json['columns'][3]['data'] = "PUNTOS";
            $json['columns'][3]['name'] = "PUNTOS";
            $json['columns'][4]['data'] = "ESTADO";
            $json['columns'][4]['name'] = "ESTADO";

        echo json_encode($json);
        $this->sqlsrv->close();
    }
    public function masterCompras($fecha1,$fecha2)
    {
        $i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT DESCRIPCION,CANTIDAD,CLIENTE,NOMBRE_CLIENTE,RUTA,FACTURA,FECHA FROM vtVS2_MASTER_COMPRAS WHERE FECHA BETWEEN '".$fecha1."' AND '".$fecha2."' AND FECHA >= '".$this->CONDICION."'"
                                            ,SQLSRV_FETCH_ASSOC);
                                            
        foreach($query as $key){
            $json['data'][$i]['NUMERO'] = $i+1;
            $json['data'][$i]['DESCRIPCION'] = $key['DESCRIPCION'];
            $json['data'][$i]['CANTIDAD'] = $key['CANTIDAD'];
            $json['data'][$i]['CLIENTE'] = $key['CLIENTE'];
            $json['data'][$i]['NOMBRE'] = $key['NOMBRE_CLIENTE'];
            $json['data'][$i]['RUTA'] = $key['RUTA'];
            $json['data'][$i]['FACTURA'] = $key['FACTURA'];
            $json['data'][$i]['FECHA'] = $key['FECHA']->format('d-m-Y');
            $i++;
        }
            $json['columns'][0]['data'] = "NUMERO";
            $json['columns'][0]['name'] = "NUMERO";
            $json['columns'][1]['data'] = "DESCRIPCION";
            $json['columns'][1]['name'] = "DESCRIPCION";
            $json['columns'][2]['data'] = "CANTIDAD";
            $json['columns'][2]['name'] = "CANTIDAD";
            $json['columns'][3]['data'] = "CLIENTE";
            $json['columns'][3]['name'] = "CODIGO";
            $json['columns'][4]['data'] = "NOMBRE";
            $json['columns'][4]['name'] = "NOMBRE";
            $json['columns'][5]['data'] = "RUTA";
            $json['columns'][5]['name'] = "RUTA";
            $json['columns'][6]['data'] = "FACTURA";
            $json['columns'][6]['name'] = "FACTURA";
            $json['columns'][7]['data'] = "FECHA";
            $json['columns'][7]['name'] = "FECHA";

        echo json_encode($json);
        $this->sqlsrv->close();
    }
    public function reporteXfecha($fecha1,$fecha2)
    {
        $i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT FECHA,RUTA,SUM(TT_PUNTOS) AS PUNTOS, FACTURA,CLIENTE, NOMBRE_CLIENTE from vtVS2_Facturas_CL
                                            WHERE FECHA BETWEEN '".$fecha1."' AND '".$fecha2."' AND FECHA >= '".$this->CONDICION."'
                                            GROUP BY FACTURA,FECHA,RUTA,CLIENTE,NOMBRE_CLIENTE",SQLSRV_FETCH_ASSOC);
                                            
        foreach($query as $key){
            $json['data'][$i]['FECHA'] = $key['FECHA']->format('d-m-Y');
            $json['data'][$i]['RUTA'] = $key['RUTA'];
            $json['data'][$i]['PUNTOS'] = $key['PUNTOS'];
            $json['data'][$i]['FACTURA'] = $key['FACTURA'];
            $json['data'][$i]['CLIENTE'] = $key['CLIENTE'];
            $json['data'][$i]['NOMBRE'] = $key['NOMBRE_CLIENTE'];
            $i++;
        }
            $json['columns'][0]['data'] = "FECHA";
            $json['columns'][0]['name'] = "FECHA";
            $json['columns'][1]['data'] = "RUTA";
            $json['columns'][1]['name'] = "RUTA";
            $json['columns'][2]['data'] = "PUNTOS";
            $json['columns'][2]['name'] = "PUNTOS";
            $json['columns'][3]['data'] = "FACTURA";
            $json['columns'][3]['name'] = "FACTURA";
            $json['columns'][4]['data'] = "CLIENTE";
            $json['columns'][4]['name'] = "CLIENTE";
            $json['columns'][5]['data'] = "NOMBRE";
            $json['columns'][5]['name'] = "NOMBRE";

        echo json_encode($json);
        $this->sqlsrv->close();   
    }
}