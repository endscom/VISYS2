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

        //Carga la informacion del MySQL(Usuarios)      
        $query = $this->sqlsrv->fetchArray("SELECT NOMBRE, RUC, DIRECCION FROM vtVS2_Clientes WHERE CLIENTE NOT IN (".$this->LoadAllClients().")",SQLSRV_FETCH_ASSOC);

        foreach($query as $key){
            $json['query'][$i]['NOMBRE']=$key['NOMBRE'];
            $json['query'][$i]['RUC']=$key['RUC'];
            $json['query'][$i]['DIRECCION']=$key['DIRECCION'];
            $i++;
        }
        
        return $json;
        $this->sqlsrv->close();
    }

    public function LoadAllClients(){
        $query = $this->db->get('vt_ClientesUser');
        return $query->row('CLIENTES');
    }
}