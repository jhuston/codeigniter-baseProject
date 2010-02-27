<?php

class Admin extends MY_Controller{
	
	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->data['title'] = "Admin";
		
	}
	
	public function index(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username != ""){
			$this->_login($username,$password);
		}
	}
	
	private function _login($username,$password){
		$this->site_sentry->login_routine($username,$password,'dashboard');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('','location');
		exit;
	}
	
	// public function encrypt_password($password){
	// 	$this->view =FALSE;
	// 	$this->layout = FALSE;
	// 	$password = $this->encrypt->encode($password);
	// 	echo $password;
	// }

}