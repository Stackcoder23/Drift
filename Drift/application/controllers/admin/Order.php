<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function index()
	{
		

		$this->load->view('admin/order');
	}
    
   public function order_history_data(){
   		$this->load->model('user_order_details');
   		$result = $this->user_order_details->order_list();
   		echo json_encode($result);
    // echo 1;
   }

   //to get complete details of the order history
    public function detail_order_history(){
      $this->load->model('user_order_details');
      $data = file_get_contents("php://input");
      $data = json_decode($data,true);

    	$result = $this->user_order_details->Order_history($data);
    	echo json_encode($result);
    }

}

/* End of file Orders.php */


?>