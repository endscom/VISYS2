<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vista_controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function main(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/main');
        $this->load->view('footer/footer');
    }

    public function EliminarVineta(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/EliminarVineta');
        $this->load->view('footer/footer');
    }

    public function Clientes(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Clientes');
        $this->load->view('footer/footer');
    }

    public  function BajaClientes(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/BajaClientes');
        $this->load->view('footer/footer');
    }

    public  function  PuntosClientes(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/PuntosClientes');
        $this->load->view('footer/footer');
    }

    public function DetalleFact(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/DetalleFact');
        $this->load->view('footer/footer');
    }

    public function CanjeFrp(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/CanjeFRP');
        $this->load->view('footer/footer');
    }

    public function CanjeFre(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/CanjeEfec');
        $this->load->view('footer/footer');
    }

    public function Catalogo(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Catalogo');
        $this->load->view('footer/footer');
    }

/*Funionalidad de Usuario*/
    public function Usuarios() {// CARGAR USUARIOS
        $query['Luser'] = $this->vista_model->LoadUser();
        $query['Lrol'] = $this->vista_model->LoadRol();
        $query['Lven'] = $this->vista_model->LoadVendedor();
        $query['Lcl'] = $this->vista_model->LoadClient();

        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Users',$query);
        $this->load->view('footer/footer');
    }
    public function addUser($user,$clave,$rol,$vendedor) {// AGREGAR USUARIO
        $fecha = date('Y-m-d H:i:s');
        $query = $this->vista_model->addUser($user,$clave,$rol,$fecha,$vendedor);
    }
    public function ActUser($IdUser,$Estado) {/*CAMBIAR ESTADO DE USUARIO*/
       $this->vista_model->ActUser($IdUser,$Estado);
    }

    /*Funionalidad de Usuario*/
    public function Reportes(){
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Reportes');
        $this->load->view('footer/footer');
    }
}