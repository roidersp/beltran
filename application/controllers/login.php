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

}
