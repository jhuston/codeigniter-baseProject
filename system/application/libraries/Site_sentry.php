<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
* Site Sentry security library for Code Igniter applications
* Author: James Nicol, Glossopteris Web Designs & Development, www.glossopteris.com, April 2006
*
* Modified very heavily for lesamis.com 
*/

class Site_sentry {

	function Site_sentry()
	{
		$this->obj =& get_instance();
	}

	function is_logged_in()
	{
		if ($this->obj->session) {
			//If user has valid session, and such is logged in
			if ($this->obj->session->userdata('logged_in')) {
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	} 

//TODO this is a stub for a login routine. It should create a session and store it in the DB. Maybe a cookie as well?
	function login_routine($username,$password,$redirect = ""){
		$this->obj->db->where('username',$username);
		$query = $this->obj->db->get('users');
		if(!$query->result()){
				$this->obj->session->set_flashdata('message','login failed');
				redirect('admin');
				exit;
		}
		$logged_in = FALSE;
		foreach($query->result() as $row){
			log_message('debug',$row->user_id);
			if($row->username == $username && $this->obj->encrypt->decode($row->password) == $password){
				$logged_in = TRUE;
				$id = $row->user_id;
				$username = $row->username;
			}
		}
		if ($logged_in==TRUE) {
			$credentials = array('user_id' => $id, 'logged_in' => $logged_in,'username'=>$username);
			$this->obj->session->set_userdata($credentials);
			//On success redirect user to default page
			log_message('debug','login good');
			redirect("/".$redirect);
			exit;
		} else {
			//On error send user back to login page, and add error message
			$this->obj->session->set_flashdata('message','login failed');
			redirect('admin');
			exit;
		}
	}

}
?>