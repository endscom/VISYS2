<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exportacion_controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('MPDF/mpdf');
        $this->load->model('canje_model');
    }

    public function ExpoClients(){
        $query = $this->cliente_model->LoadClients();// Cargar Clientes
        $this->load->view('Exportar/Excel_Cliente',$query);
    }

    public function ExpoPdf(){
        $query = $this->cliente_model->LoadClients();// Cargar Clientes
        $PdfCliente = new mPDF('utf-8','A4');
        $PdfCliente -> writeHTML($this->load->view('Exportar/Pdf_Cliente',$query,true));
        $PdfCliente->Output();
    }
    public function ExpPDF_PuntosClientes()
    {
        $query = $this->cliente_model->LoadClientsPuntos();// Cargar puntos clientes
        $PdfCliente = new mPDF('utf-8','A4');
        $PdfCliente -> writeHTML($this->load->view('Exportar/pdf_PuntosClientes',$query,true));
        $PdfCliente->Output();
    }

    public function ExpEXCEL_PuntosClientes()
    {
        $query = $this->cliente_model->LoadClientsPuntos();// Cargar puntos clientes
        $this->load->view('Exportar/Excel_PuntosClientes',$query);
    }
    public function ExpoFrp($id){
        $data['top'] = $this->canje_model->getFRP($id,'frp');
        $data['DFactura'] = $this->canje_model->getFRP($id,"view_frp_factura");
        $data['DArticulo'] = $this->canje_model->getFRP($id,"view_frp_articulo");

        $this->load->view('Exportar/Pdf_FRP',$data);
    }
}