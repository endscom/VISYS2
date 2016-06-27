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
}