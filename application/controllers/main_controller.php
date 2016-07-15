<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


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



    public function Usuarios()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Users');
        $this->load->view('footer/footer');
    }

    public function Reportes()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Reportes');
        $this->load->view('footer/footer');
    }

}