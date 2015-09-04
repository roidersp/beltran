<?php 
	
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* Login
*/
class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	
	
	public function index(){
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
    
            //lanzamos mensajes de error si es que los hay
            
			
				$username = $this->input->post('usuario');
				$password = sha1($this->input->post('password'));
				$check_user = $this->login_model->login_user($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'id_usuario' 	=> 		$check_user->id,
	                'perfil'		=>		$check_user->perfil,
	                'username' 		=> 		$check_user->username
            		);		
					$this->session->set_userdata($data);
					
				}
			
		}
			redirect(base_url());
		
	}
	
	public function logout(){
		
	}
	
	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}

}
