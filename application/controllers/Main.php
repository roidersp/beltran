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
        $this->load->helper(array('url'));
    }

	 
	public function index()
	{
		/*switch ($this->session->userdata('perfil')) {
			case '':
				//$data['token'] = $this->token();
				//$data['titulo'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('main');
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
		*/
		
		$this->load->view('main');
		
		
		
	}
	
	public function login(){
		
	}
	
}
