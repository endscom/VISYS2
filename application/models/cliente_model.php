<?php
class Cliente_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function LoadClients(){
        $i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT top 10 NOMBRE, RUC, DIRECCION FROM vtVS2_Clientes",SQLSRV_FETCH_ASSOC);

        foreach($query as $key){
            $json['query'][$i]['NOMBRE']=$key['NOMBRE'];
            $json['query'][$i]['RUC']=$key['RUC'];
            $json['query'][$i]['DIRECCION']=$key['DIRECCION'];
            $i++;
        }
        // print_r($json);
        return $json;
        $this->sqlsrv->close();
    }
}