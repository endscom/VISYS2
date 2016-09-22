<?php
class Catalogo_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function CatalogoPasado($idCatalogo)
    {
        $this->db->where('IdCT',$idCatalogo);
        $query = $this->db->get('detallect');
        $json = array();
        $i=0;
        if($query->num_rows() <> 0){
            foreach ($query->result_array() as $row){                   
                    $json['data'][$i]['CodigoImg'] = $row['CodigoImg'];
                    $json['data'][$i]['Nombre'] = $row['Nombre'];
                    $json['data'][$i]['Imagen'] = '<img class="btn-floating materialboxed" data-caption='.$row['Nombre']." ".number_format($row['Puntos'])." PTOS'
                                                    width='250' src=".base_url().'assets/img/catalogo/'.$row['Imagen'].'>';
                    $json['data'][$i]['Puntos'] = $row['Puntos'];
                    $json['data'][$i]['check'] = '<input type="checkbox" id="chk-'.$row['CodigoImg'].'" />
                                                    <label for="chk-'.$row['CodigoImg'].'"></label>';
                    $json['data'][$i]['idCT'] = $row['IdCT'];
                    $i++;
                }
             
        } else {   
                $json['data'][$i]['CodigoImg'] = "";
                $json['data'][$i]['Nombre'] = "";
                $json['data'][$i]['Imagen'] = "";
                $json['data'][$i]['Puntos'] = "";
                $json['data'][$i]['check'] = "";
                $json['data'][$i]['idCT'] = "";

        }      
        echo json_encode($json);         
    }
    public function guardarIMG($codigo,$nombre,$imagen,$puntos)
    {
    	$data = array('Codigo'	=>	$codigo,
    				 'Nombre'	=>	strtoupper($nombre),
    				 'Imagen' 	=>	$imagen,
    				 'Puntos'	=>	$puntos,
    				 'Estado'	=>	0);
    	$this->db->insert('catalogo',$data);
    }
    public function traerCatalogoImg()
    {
    	$query = $this->db->get('tmp_catalogo');
    	if ($query->num_rows() >0) {
    		return $query->result_array();
    	}
    	return 0;
    }
    public function traerCatalogoImgActual()
    {
        $query = $this->db->get('view_catalogo_activo');
        if ($query->num_rows() >0) {
            return $query->result_array();
        }
        return 0;
    }
    public function traerCatalogo()
    {
        $query = $this->db->get('catalogo');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function traerCatalogosHistorial()
    {
        $this->db->where('Estado',1);
        $query = $this->db->get('catalogo');
        if ($query->num_rows()>0) {
            return $query->result_array();
        }
        return 0;
    }
    public function actualizarPuntos($codImagen,$codCatalogo,$puntos)
    {
        $data = array(
               'Puntos' => $puntos
            );
        $this->db->where('IdCT',$codCatalogo);
        $this->db->where('CodigoImg',$codImagen);
        $this->db->update('detallect',$data);
    }
}
?>