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
        $query = $this->sqlsrv->fetchArray("SELECT CLIENTE,NOMBRE, RUC, DIRECCION,VENDEDOR FROM vtVS2_Clientes WHERE CLIENTE NOT IN(".$this->LoadAllClients().")",SQLSRV_FETCH_ASSOC);

        foreach($query as $key){
            $json['query'][$i]['NOMBRE']=$key['NOMBRE'];
            $json['query'][$i]['RUC']=$key['RUC'];
            $json['query'][$i]['DIRECCION']=$key['DIRECCION'];
            $json['query'][$i]['VENDEDOR']=$key['VENDEDOR'];
            $json['query'][$i]['CLIENTE']=$key['CLIENTE'];
            $i++;
        }
        return $json;
        $this->sqlsrv->close();
    }
    public function LoadClientsPuntos(){
        $i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT CLIENTE, NOMBRE_CLIENTE,SUM(TT_PUNTOS) AS PUNTOS, (SELECT RUC FROM vtVS2_Clientes WHERE vtVS2_Clientes.CLIENTE= vtVS2_Facturas_CL.CLIENTE) AS RUC FROM vtVS2_Facturas_CL GROUP BY CLIENTE,NOMBRE_CLIENTE",SQLSRV_FETCH_ASSOC);
        $json['query'][$i]['CLIENTE']=$key['CLIENTE'];  $json['query'][$i]['NOMBRE']=$key['NOMBRE_CLIENTE'];
        $json['query'][$i]['PUNTOS']=$key['PUNTOS'];    $json['query'][$i]['RUC']=$key['RUC'];

        foreach($query as $key){
            $json['query'][$i]['CLIENTE']=$key['CLIENTE'];
            $json['query'][$i]['NOMBRE']=$key['NOMBRE_CLIENTE'];
            $json['query'][$i]['PUNTOS']=$key['PUNTOS'];
            $json['query'][$i]['RUC']=$key['RUC'];
            $i++;
        }
        return $json;
        $this->sqlsrv->close();
    }
    public function LoadClientsBaja()
    {
        $i=0;
        $json = array();
        $query = $this->sqlsrv->fetchArray("SELECT CLIENTE,NOMBRE, RUC, DIRECCION,VENDEDOR FROM vtVS2_Clientes WHERE CLIENTE IN(".$this->LoadAllClientsActivos().")",SQLSRV_FETCH_ASSOC);
            $json['query'][$i]['NOMBRE']= "";   $json['query'][$i]['RUC']= "";
            $json['query'][$i]['DIRECCION']= "";    $json['query'][$i]['VENDEDOR']= "";
            $json['query'][$i]['CLIENTE']= "";
        foreach($query as $key){
            $json['query'][$i]['NOMBRE']=$key['NOMBRE'];
            $json['query'][$i]['RUC']=$key['RUC'];
            $json['query'][$i]['DIRECCION']=$key['DIRECCION'];
            $json['query'][$i]['VENDEDOR']=$key['VENDEDOR'];
            $json['query'][$i]['CLIENTE']=$key['CLIENTE'];
            $i++;
        }
        return $json;
        $this->sqlsrv->close();
    }
    public function LoadAllClients(){
        $query = $this->db->get('vt_ClientesUser');
        if ($query->row('CLIENTES')=="") {
            $query="''";
            return $query;
        }
        return $query->row('CLIENTES');
    }
    public function LoadAllClientsActivos(){
        $query = $this->db->get('view_ClientesActivos');
        if ($query->row('CLIENTES')=="") {
            $query="''";
            return $query;
        }
        return $query->row('CLIENTES');
    }
    
    public function traerUsuario($codigo)
    {
        $this->db->where('IdCL',$codigo);
        $query = $this->db->get('usuario');
        if ($query->row('Usuario')!="") {
            echo $query->row('Usuario');
        }else{
            echo 0;
        }
    }
    public function FindClient($cond){
        $consulta = str_replace('%20', ' ', $cond);
        $buscar = $this->sqlsrv->fetchArray("SELECT * from vtVS2_Clientes where NOMBRE ='".$consulta."'",SQLSRV_FETCH_ASSOC);

        $id=$buscar[0]['CLIENTE'];
        $cliente=$buscar[0]['NOMBRE'];
        $this->sqlsrv->close();
    }
    public function generarUsuarios($codigo,$nombre,$vendedor)
    {
        $usuario = $this->sqlsrv->fetchArray("SELECT dbo.ABREV_CL('".$nombre."') as USUARIO",SQLSRV_FETCH_ASSOC);
        $this->sqlsrv->close();
        foreach ($usuario as $key) {
            $usuario = $key['USUARIO'];
        }
        if ($usuario != "") {
            $clave = $this->generarClave($usuario);
            $this->db->where('Clave',$clave);
            $this->db->where('Usuario',$usuario);
            $this->db->where('Estado',0);
            $query = $this->db->get('usuario');
            if($query->num_rows() == 0){
                $data = array('Usuario' => $usuario,
                            'Nombre' => $nombre,
                            'Clave' => $clave,
                            'Rol' => "Vendedor",
                            'IdCL' => $codigo,
                            'Cliente' => $nombre,
                            'Estado' => 0,
                            'Zona' => $vendedor,
                            'FechaCreacion' => date('Y-m-d h:i:s')
                );
            $this->db->insert('usuario',$data);
            }
        }
    }
    public function generarClave($nombre)
    {
        $resultado = substr($nombre, -(strlen($nombre)), 2);
        return $resultado.(rand(1000,9999));
    }
    public function darBajaCliente($codigo)
    {
        $data = array('Estado' => 1);
        $this->db->where('IdCL',$codigo);
        $this->db->update('usuario',$data);
    }
}