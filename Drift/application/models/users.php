<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {
   

	public function add_user_data($users){
		//print_r($users);
	    $this->db->select('name');
	    $this->db->from('user');
	    $this->db->where('name',$users['name']);
	    //$this->db->count_all_results();
	    $query=$this->db->count_all_results();
	    echo $query;
	    if($query==0){
		   $query=$this->db->insert("user",$users);
		    return $this->db->insert_id();
		}
		else{
			echo 0;
		}

	}

	public function user_data($data){
        $username=$data['username'];
        $pwd=$data['password'];

		$query="SELECT name,password,id from user where name='$username' and password='$pwd'";
		
		$result=$this->db->query($query);
		return $result;
	}

	public function get_user(){
		$this->db->select('fullname,address,photo,phone,gender,email')->from('customer')->where('type',0);
		$query = $this->db->get();
	
		return $query->result_array();

	}

}

/* End of file users.php */
/* Location: ./application/models/users.php */