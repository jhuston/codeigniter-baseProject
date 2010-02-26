<?php

class Dashboard extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
		if(!$this->logged_in){
			redirect('admin');
		}
		else{
			$this->data['title'] = "Dashboard";
		}
	}
	
	public function index(){
		
	}
}