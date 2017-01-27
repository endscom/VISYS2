<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boucher_controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        if($this->session->userdata('logged')==0){ //No aceptar a usuarios sin loguearse
            redirect(base_url().'index.php/login','refresh');
        }
        $this->load->model('canje_model');
        $this->load->model('cliente_model');
    }
    public function index(){
        $data = $this->cliente_model->ListarClientes();
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/EliminarVineta',$data);
        $this->load->view('footer/footer');
        $this->load->view('jsview/js_boucher');
    }
    public function cargarDevoluciones($codigo)
    {
        $this->canje_model->getFacturaDevolucion($codigo);
    }
    public function aplicarDevolucion()
    {
        $this->canje_model->aplicarDevolucion($_POST['factura'],$_POST['cantidad'],$_POST['observacion'],$_POST['ttPuntos'],$_POST['cliente']);
    }
}