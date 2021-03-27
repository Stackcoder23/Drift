<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   public function index()
	{
		
		// $data = array(
		// 	'title' => "customer list", 
		// 	'view'  => "admin/users"
		// );

		$this->load->view('admin/users');
	}
    
    public function get_users(){
    	$this->load->model('users');

		$result=$this->users->get_user();
		echo json_encode($result);
    }

}

/* End of file Users.php */

?>