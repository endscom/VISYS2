<?php
class Facturas_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function traerFacturas()
    {
    	$i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT TOP 10 FECHA,FACTURA,CLIENTE,NOMBRE_CLIENTE,ISNULL(SUM(TT_PUNTOS),0) AS PUNTOS FROM vtVS2_Facturas_CL
											GROUP BY FACTURA,CLIENTE,FECHA,NOMBRE_CLIENTE ORDER BY FECHA DESC",SQLSRV_FETCH_ASSOC);

        foreach($query as $key){
            $json['query'][$i]['FECHA'] = $key['FECHA']->format('d-m-Y');
            $json['query'][$i]['FACTURA'] = $key['FACTURA'];
            $json['query'][$i]['CLIENTE'] = $key['CLIENTE'];
            $json['query'][$i]['NOMBRE_CLIENTE'] = $key['NOMBRE_CLIENTE'];
            $json['query'][$i]['PUNTOS'] = number_format($key['PUNTOS'],2);
            $json['query'][$i]['VER'] = "<a  onclick='detalleFactura(".'"'.$key['FACTURA'].'"'.")' href='#!' class='modal-trigger noHover'><i class='material-icons'>remove_red_eye</i></a>";
            $i++;
        }
        return $json;
        $this->sqlsrv->close();
    }
    public function formatDatePHP($fecha)
    {
    	$date = date_create($fecha);
		return date_format($date, 'Y-m-d');
    }
    public function detallefacturas($factura)
    {
    	$i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT * FROM vtVS2_Facturas_CL WHERE FACTURA=".$factura."",SQLSRV_FETCH_ASSOC);

        foreach($query as $key){
            $json['data'][$i]['ARTICULO'] = $key['ARTICULO'];
            $json['data'][$i]['DESCRIPCION'] = $key['DESCRIPCION'];
            $json['data'][$i]['CANTIDAD'] = number_format($key['CANTIDAD'],2);
            $json['data'][$i]['PUNTOS'] = $key['PUNTOS'];
            $json['data'][$i]['TOTAL'] = ($key['CANTIDAD']*$key['PUNTOS']);
            $i++;
        }
        echo json_encode($json);
        //$this->sqlsrv->close();
    }
}
?>
