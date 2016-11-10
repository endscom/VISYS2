<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('logged')==0){ //No aceptar a usuarios sin loguearse
            redirect(base_url().'index.php/login','refresh');
        }
    }

    public function FindClient($cond){
         $this->cliente_model($cond);
    }
    public function Clientes(){
        $query = $this->cliente_model->LoadClients();// Cargar Clientes

        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Clientes',$query);
        $this->load->view('footer/footer');
        $this->load->view('jsview/js_clientes');
    }
    public  function BajaClientes(){
        $query = $this->cliente_model->LoadClientsBaja();

        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/BajaClientes',$query);
        $this->load->view('footer/footer');
        $this->load->view('jsview/js_clientes');
    }
    public  function  PuntosClientes(){
        $query = $this->cliente_model->LoadClientsPuntos();// Cargar puntos clientes
        
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/PuntosClientes',$query);
        $this->load->view('footer/footer');
        $this->load->view('jsview/js_clientes');
    }
    public function generarUsuarios()
    {
        $this->cliente_model->generarUsuarios($this->input->post('codigo'),$this->input->post('nombre'),$this->input->post('vendedor'));
    }
    public function traerUsuario($codigo)
    {
        $this->cliente_model->traerUsuario($codigo);
    }
    public function darBajaCliente()
    {
        $this->cliente_model->darBajaCliente($this->input->post('codigo'));
    }
    public function ListarClientes()
    {
        $this->cliente_model->ListarClientes();
    }
}
?>