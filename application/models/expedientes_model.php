<?php
class Expedientes_model extends CI_Model
{
  
    var $id;    // llave primaria de la base de datos
    var $nombre_tabla; // nombre de la tabla en la base de datos
    var $campos; // arreglo de campos de la tabla de la base de datos ej. array(grupo_id, nombre);
	
	public function __construct() 
	{	
            parent::__construct();
            $this->load->database();
            $this->id = "idExpediente";
            $this->table_name = "Expediente";
            $this->table_key = "Clientes_has_Expediente";
	}
	
	public function create ($param,$id_usuario) {
       // var_dump($param);
               
        $this->db->insert($this->table_name, $param);
        $id = $this->db->insert_id();
        
        $data = array("Clientes_idClientes"=>$id_usuario, "Expediente_idExpediente"=>$id);
        
        $this->db->insert($this->table_key, $data);
        
        
      
    }
    
}

?>