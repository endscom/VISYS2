<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes_controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        if($this->session->userdata('logged')==0){ //No aceptar a usuarios sin loguearse
            redirect(base_url().'index.php/login','refresh');
        }
        $this->load->model('canje_model');
        $this->load->model('cliente_model');
        $this->load->model('reportes_model');
    }
    public function index()
    {
    	$data = $this->cliente_model->ListarClientes();
    	$this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Reportes',$data);
        $this->load->view('footer/footer');
        $this->load->view('jsview/js_reportes');
    }
    public function cuentaXcliente()
    {
        if ($_GET['fecha1']=="") {
            $fecha1 = '2012-01-01';
            $fecha2 = date('Y-m-d');
        }else{
            $fecha1 = $_GET['fecha1'];
            $fecha2 = $_GET['fecha2'];
        }
        $this->reportes_model->cuentaXcliente($_GET['codigo'],$fecha1,$fecha2);
    }
    public function datosCliente($codigo)
    {
        $this->reportes_model->datosCliente($codigo);
    }
}