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
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('usuarios_model'));
		$this->load->model(array('expedientes_model'));
		$this->load->model(array('acuerdo_model'));
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

	public function updateusuario()
	{
		$data = $this->input->post(NULL, TRUE);
		$id=$data["id"];
		
		unset($data["id"]);
		
		$user_id = $this->usuarios_model->update($id,$data);
	}

		
	public function add()
	{
		$data = $this->input->post(NULL, TRUE);
		$user_id = $this->usuarios_model->create($data);
		redirect("admin", 'location');
	}

	public function cliente($id)
	{	
		$users  = $this->usuarios_model->get_usuario($id);
		$data['cliente']=($users);
		$data['tabla']=$this->expedientes_model->getexpedientes_bycliente($id);
		$this->load->view('admin/cliente',$data);
	}
	
	public function expediente($id)
	{	
		$users  = $this->expedientes_model->get_expediente($id);
		$data['expediente']=($users);
		$data["id"]=$id;
		$this->load->view('admin/expediente',$data);
	}
	
	public function nuevoexpediente()
	{	
		$data   = $this->input->post(NULL, TRUE);
		$this->load->view('admin/addexpediente',$data);
		 
	}
	
	public function addexpediente()
	{	
		$data = $this->input->post(NULL, TRUE);
		$user_id = $this->expedientes_model->create($data);
		$id_usuario=$data['Usuarios_idUsuarios'];
		redirect("admin/cliente/".$id_usuario, 'location');
	}

	public function nuevoacuerdo(){
		$data["id"]=$_POST["id"];
		$this->load->view('admin/addacuerdo',$data);
	}
	
	public function acuerdo($id)
	{	
		$users  = $this->acuero_model->get_acuerdo($id);
		$data['acuerdo']=($users);
		$data["id"]=$id;
		$this->load->view('admin/acuerdo',$data);
	}
	
	
	public function addacuerdo()
	{	
		$data = $this->input->post(NULL, TRUE);
		
				
		
		
		
		var_dump( $_POST);
		echo "<br>";
		var_dump( $_FILES);
		echo "<br>";
		var_dump($data);
	}
	
	public function uploadimages()
	{

       
	       // Detect form submission.
	       echo("test");
	       var_dump($_POST);
	       
	       var_dump($this->input->post('submit'));
	       
	        if($this->input->post('submit')){
	        
	            $path = '/beltran/acuerdos/';
	            $this->load->library('upload');
	            /**
	             * Refer to https://ellislab.com/codeigniter/user-guide/libraries/file_uploading.html 
	             * for full argument documentation.
	             *
	             */
	             
	            // Define file rules
	            $this->upload->initialize(array(
	                "upload_path"       =>  $path,
	                "allowed_types"     =>  "gif|jpg|png",
	                "max_size"          =>  '100',
	                "max_width"         =>  '1024',
	                "max_height"        =>  '768'
	            ));
	            
	            if($this->upload->do_multi_upload("uploadfile")){
	                
	                $data['upload_data'] = $this->upload->get_multi_upload_data();
	                
	                echo '<p class = "bg-success">' . count($data['upload_data']) . 'File(s) successfully uploaded.</p>';
	                
	            } else {    
	                // Output the errors
	                $errors = array('error' => $this->upload->display_errors('<p class = "bg-danger">', '</p>'));               
	            
	                foreach($errors as $k => $error){
	                    echo $error;
	                }
	                
	            }
	            
	        } else {
	            echo '<p class = "bg-danger">An error occured, please try again later.</p>';
	            
	        }
	        // Exit to avoid further execution
	        exit();

	}
	
	
	


}