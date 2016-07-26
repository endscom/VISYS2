<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vista_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('main_model');


    }

    public function main()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/main');
        $this->load->view('footer/footer');
    }

    public function EliminarVineta()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/EliminarVineta');
        $this->load->view('footer/footer');
    }

    public function Clientes()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Clientes');
        $this->load->view('footer/footer');
    }

    public  function BajaClientes()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/BajaClientes');
        $this->load->view('footer/footer');
    }

    public  function  PuntosClientes()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/PuntosClientes');
        $this->load->view('footer/footer');
    }
    public function DetalleFact()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/DetalleFact');
        $this->load->view('footer/footer');
    }

    public function CanjeFrp()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/CanjeFRP');
        $this->load->view('footer/footer');
    }

    public function CanjeFre()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/CanjeEfec');
        $this->load->view('footer/footer');
    }

    public function Catalogo()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Catalogo');
        $this->load->view('footer/footer');
    }
/*Funionalidad de Usuario*/
    public function Usuarios()
    {
        $query['Luser']=$this->main_model->LoadUser();
        $query['Lrol']=$this->main_model->LoadRol();
        $query['Lven']=$this->main_model->LoadVendedor();
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Users',$query);
        $this->load->view('footer/footer');
    }
    public function addUser()
    {
        $nombre =$this->input->get_post('user');
        $clave = $this->input->get_post('pass');
        $rol =$this->input->get_post('rol');
        $vendedor = $this->input->get_post('vendedor');
        $fecha =  date('Y-m-d');

        echo $nombre;
       $this->main_model->addUser($nombre,$clave,$rol,$fecha,$vendedor);
        redirect(base_url().'index.php/Usuarios','refresh');
    }
    /*Funionalidad de Usuario*/
    public function Reportes()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Reportes');
        $this->load->view('footer/footer');
    }

}