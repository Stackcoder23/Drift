<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Model {

	public function check_user($data){
                //print_r($data);
                $this->db->select('type,fullname,userid');
                $this->db->from('customer');
                $this->db->where('password',$data['password']);
                $this->db->where('email',$data['username']);
                $query=$this->db->get();
                
                return $query->result();

        }
        
        public function insert_user($data){
                $this->db->select('name');
                $this->db->from('customer');
                $this->db->where('email',$data['email']);
                $this->db->where('phone',$data['phone']);
                $query=$this->db->count_all_results();
                //echo $this->db->last_query();
                //print_r($data);
		//echo $query;
		if($query==0){
		$query=$this->db->insert("customer",$data);
		       return $this->db->insert_id();
		}
		else{
			return 0;
		}
        }

        public function insert_vehicle($data){
                $this->db->select('regno');
                $this->db->from('vehicle');
                $this->db->where('regno',$data['regno']);
                
                $query=$this->db->count_all_results();

                //print_r($data);
		//echo $query;
		if($query==0){
		$query=$this->db->insert("vehicle",$data);
		       return $this->db->insert_id();
		}
		else{
			return 0;
		}
        }

        public function update_image_name($image,$user_id){
                $this->db->set('photo',$image);
                $this->db->where('userid', $user_id);
                $this->db->update('customer');
                return 1;  
        }

        public function check_user_exists($email){
                $this->db->select('*');
                $this->db->from('customer');
                $this->db->where('email',$email);
                $this->db->where('type',1);
                $query=$this->db->count_all_results();
                return $query;

        }

        public function updatepassword($data){
                $this->db->set('password',$data['password']);
                $this->db->where('email', $data['email']);
                $this->db->where('type',1);
                $this->db->update('customer');
                $result = $this->db->affected_rows();
                return $result;

        }

}

/* End of file admin.php */
/* Location: ./application/models/admin.php */