<?php
class Usuarios_model extends CI_Model
{
  
    var $id;    // llave primaria de la base de datos
    var $nombre_tabla; // nombre de la tabla en la base de datos
    var $campos; // arreglo de campos de la tabla de la base de datos ej. array(grupo_id, nombre);
	
	public function __construct() 
	{	
            parent::__construct();
            $this->load->database();
            $this->id = "idUsuarios";
            $this->table_name = "Usuarios";
	}
	
	public function create ($param) {
		
            $this->db->insert($this->table_name, $param);
            return $this->db->insert_id();
      
    }
    
    public function update($id,$data){
	    $this->db->where($this->id, $id);
		$this->db->update($this->table_name, $data);
    }
    
    public function get_all() {
            
            $this->db->select('idUsuarios, nombre, apellidoP, apellidoM, correo, tipo');
            $this->db->from($this->table_name);
            $query_result   =   $this->db->get();
            
            $query_users_array  =   $query_result->result_array();
            
            $users_array= array();
            
            for($i=0;$i<count($query_users_array);$i++){
            	$array=array();
            	//$array[]=$i+1;
            	$array[]=$query_users_array[$i]['idUsuarios'];
            	$array[]=$query_users_array[$i]['nombre'];
            	$array[]=$query_users_array[$i]['apellidoP'];
            	$array[]=$query_users_array[$i]['apellidoM'];
            	$array[]=$query_users_array[$i]['correo'];
            	$array[]=$query_users_array[$i]['tipo'];

            	$users_array[]=$array;
	            
            }
            
            $arrays = new stdClass();
            $arrays->aaData=$users_array;
            $json = json_encode($arrays);
            
            return $json;
            
    }
    
     public function get_usuario($id) {
            
            $this->db->select('idUsuarios, nombre, apellidoP, apellidoM, correo, tipo');
            $this->db->where('idUsuarios', $id);
            $this->db->from($this->table_name);
            $query_result = $this->db->get();
            
            $query_users_array = $query_result->result_array();
            
            
            $json = ($query_users_array[0]);
            
            return $json;
            
    }

    
}