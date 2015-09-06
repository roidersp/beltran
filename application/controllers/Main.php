<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	  public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library('session');
    }

	 
	public function index()
	{
		/*switch ($this->session->userdata('perfil')) {
			case '':
				$data['token'] = $this->token();
				//$data['titulo'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('main',$data);
				break;
			case 'administrador':
				redirect(base_url().'admin');
				break;
			case 'editor':
				redirect(base_url().'editor');
				break;	
			case 'suscriptor':
				redirect(base_url().'expedientes');
				break;
			default:		
				//$data['titulo'] = 'Login con roles de usuario en codeigniter';
								
			break;		
		}
	
		
		//$this->load->view('main');
		
		*/
		
		redirect(base_url().'login');
		
		
		
	}
	
	public function login(){
		echo("dsfsdf");
		/*if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
    
            //lanzamos mensajes de error si es que los hay
			
				$username = $this->input->post('usuario');
				$password = ($this->input->post('password'));
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
					
				}else
				{
					echo("test");
				}
			
		}
			//redirect(base_url());
		*/
	}
	
	public function logout(){
		echo "ftugyh";
	}
	
	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
}
