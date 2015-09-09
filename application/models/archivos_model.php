<?php
class Archivos_model extends CI_Model
{
  
    var $id;    // llave primaria de la base de datos
    var $nombre_tabla; // nombre de la tabla en la base de datos
    var $campos; // arreglo de campos de la tabla de la base de datos ej. array(grupo_id, nombre);
	
	public function __construct() 
	{	
            parent::__construct();
            $this->load->database();
            $this->id = "idImagenes";
            $this->table_name = "Imagenes";
	}
	
	public function create ($param, $acuerdo_id) {
      
      	$id_array = array();
      	
      
	    foreach($param as $url){
		    
		    $array=array("Acuerdos_idAcuerdos"=>$acuerdo_id,"url"=>$url);
		    var_dump($array);
		      
		    $this->db->insert($this->table_name, $array);
	        $id = $this->db->insert_id();
	        $id_array[] = $id;
	   
	    }
	    
	    return $id_array;
   
    }
    
    public function getimages_byacuerdos($expediente_id){
	    $this->db->select('*');
        $this->db->from($this->table_name);
		$this->db->where("Acuerdos_idAcuerdos", $expediente_id);
        
        $query_result   =   $this->db->get();
        
        $query_users_array  =   $query_result->result_array();
        
        $json = ($query_users_array);
            
        return $json;
    }
    
    public function get($id) {
            
            $this->db->select('idAcuerdos, fecha_auto, fecha_publicacion, resumen, tipo');
            $this->db->where('idAcuerdos', $id);
            $this->db->from($this->table_name);
            $query_result = $this->db->get();
            
            $query_users_array = $query_result->result_array();
            
            
            $json = ($query_users_array[0]);
            
            return $json;
            
    }
    
}

?>