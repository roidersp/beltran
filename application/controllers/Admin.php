<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->library(array('email'));
        $this->load->helper(array('url'));
        $this->load->model(array('usuarios_model'));
		$this->load->model(array('expedientes_model'));        
		$config['protocol'] = 'mail';
		$config['wordwrap'] = FALSE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
    }
	 
	public function index()
	{
		$users  = $this->usuarios_model->get_all();
		$data["tabla"]=$users;
		$this->load->view('admin/main',$data);
		$this->db->close();
	}

	public function nuevo()
	{
		$this->load->view('admin/add');
	}
	
	public function add()
	{
		$data = $this->input->post(NULL, TRUE);
		$user_id = $this->usuarios_model->create($data);
		var_dump($user_id);
	}

	public function cliente($id)
	{	
		$users  = $this->usuarios_model->get_usuario($id);
		$data['cliente']=($users);
		$this->load->view('admin/cliente',$data);
	}
	
	public function expediente()
	{	
		$data["id"]=$_POST["id"];
		$this->load->view('admin/addexpediente',$data);
	}
	
	public function nuevoexpediente()
	{	
		$data   = $this->input->post(NULL, TRUE);
		
		$id_usuario=$data['id'];
		unset($data['id']);
		
		$user_id =   $this->expedientes_model->create($data,$id_usuario);
		
		
		
		//var_dump($data);
		 
	}


}