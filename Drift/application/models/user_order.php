<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_order extends CI_Model {

    //to insert data into user_order table
	public function user_order_data($details){
		$this->db->insert('user_order',$details);
		return $this->db->insert_id();

	}

	//to update amount column in user order table
	public function update_amount($data){
		$this->db->set('total_amount',$data['total_amount'], FALSE);
		$this->db->where('id', $data['order_id']);
		$this->db->update('user_order');
		echo 1; 

	}
	

}

/* End of file user_order.php */
/* Location: ./application/models/user_order.php */