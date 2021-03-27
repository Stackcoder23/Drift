<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => "Main", 
			'view'  => "main"
		);

		$this->load->view('main');
	}

	public function check_login()
	{
		$this->load->model('admin');
		$data = file_get_contents("php://input");
		$data = json_decode($data,true);
		//print_r( $data);
		$result = array();
		$response = $this->admin->check_user($data);
		//print_r($response );
		if(!empty($response)){
			
			foreach($response as $row){
			    //print_r
				$result['type'] = $row->type;
			}
			$result['status'] = 1;
			$result['msg']    = "successful";
			
		}else{
			$result['status'] = 2;
			$result['msg']    = "Unsuccessful";
		}
		echo json_encode($result);
		
		
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/admin/Main.php */