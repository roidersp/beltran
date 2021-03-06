<?php
class Acuerdo_model extends CI_Model
{
  
    var $id;    // llave primaria de la base de datos
    var $nombre_tabla; // nombre de la tabla en la base de datos
    var $campos; // arreglo de campos de la tabla de la base de datos ej. array(grupo_id, nombre);
	
	public function __construct() 
	{	
            parent::__construct();
            $this->load->database();
            $this->id = "idAcuerdos";
            $this->table_name = "Acuerdos";
	}
	
	public function create ($param) {
       // var_dump($param);
               
        $this->db->insert($this->table_name, $param);
        $id = $this->db->insert_id();
        
        return $id;
    	          
    }
    
    public function getacuerdos_byexpedientes($expediente_id){
	    $this->db->select('*');
        $this->db->from($this->table_name);
		$this->db->where("Expediente_idExpediente", $expediente_id);
        
        $query_result   =   $this->db->get();
        
        $query_users_array  =   $query_result->result_array();
        
        $json = ($query_users_array);
            
        return $json;
    }
    
    public function get_expediente($id) {
            
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