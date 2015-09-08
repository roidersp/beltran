<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function login_user($mail,$password)
	{
		$this->db->where('correo',$mail);
		$this->db->where('password',$password);
		$query = $this->db->get('Usuarios');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			return "usuario_incorrecto";
			//redirect(base_url(),'refresh');
		}
	}
}