<?php

class Admin extends MY_Controller{
	
	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->data['title'] = "Admin";
		
	}
	
	public function index(){
		
	}
	
	public function login(){
		
	}
	
	public function logout(){
		
	}

}