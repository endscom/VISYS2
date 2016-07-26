<?php 
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function index()
    {
        $this->load->view('header/header_login');
        $this->load->view('paginas/login');
        $this->load->view('footer/footer_login');
    }
     public function login($name, $pass ){
        //echo $name;
        if($name != FALSE && $pass != FALSE){

            $this->db->where('Nombre', $name);
            $this->db->where('Clave',$pass);
            
            $query = $this->db->get('usuario');
            if($query->num_rows() == 1){
                return $query->result_array();
            }
            return 0;
        }
    }
    public function Guardar($name,$Contraseña,$Permisos){
        $data = array(
            'Name' => $name ,
            'Pass' => $Contraseña ,
            'Privilegio' =>  $Permisos,
            'Date_Creat' => date('Y-m-d')
        );
        $insert= $this->db->insert('user', $data);
        if($insert){
            return 1;
        }
        return 0;
    }
    public function del($id){
        $this->db->where('IdUser', $id);
        $delete= $this->db->delete('user');
        if($delete){
            return 1;
        }
        return 0;
    }
    public function allUser(){        
        $query = $this->db->get('user');        
        if($query->num_rows() <> 0){            
            return $query->result_array();
        }
        return 0;
    }
   
}