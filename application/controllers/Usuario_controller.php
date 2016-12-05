<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller
{

    // AGREGAR USUARIO
    public function addUser()
    {
        $user = $this->input->post('user');
        $clave = $this->input->post('clave');
        $rol = $this->input->post('rol');
        $vendedor = $this->input->post('vendedor');
        $cliente = $this->input->post('cliente');
        $fecha = date('Y-m-d H:i:s');

        if ($rol == 'SuperAdministrador' || $rol == 'Administrador') {
            $this->usuario_model->addUser($user, $clave, $rol, $fecha);
        }
        if ($rol == 'Vendedor') {
            $this->usuario_model->AddVdor($user, $clave, $rol, $fecha, $vendedor);
        } else if ($rol == 'Cliente') {
            $this->usuario_model->BuscarCl($user, $clave, $rol, $fecha, $vendedor);
        } /*else {
            echo "entro al ultimo";
            $this->usuario_model->addUser($user, $clave, $rol, $fecha, $vendedor);
        }*/

    }

    public function ActUser($IdUser, $Estado)
    {/*CAMBIAR ESTADO DE USUARIO*/
        $this->usuario_model->ActUser($IdUser, $Estado);
    }

    public function LoadClient()
    {//Cargar los clientes
        $this->usuario_model->LoadClient();
    }

    public function LoadVendedor()
    {//cargar los vendedores
        $this->usuario_model->LoadVendedores();
    }

    /*Funionalidad de Usuario*/
}