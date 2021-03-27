<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {

	public function add_cat_data($data){
		$this->db->select('name');
		$this->db->from('category');
		$this->db->where('name',$data['name']);
		$query=$this->db->count_all_results();
	    if($query==0){
			$query=$this->db->insert("category",$data);
			return $this->db->insert_id();
		}
		else{
			echo 0;
		}
	}

	public function cat_list(){
		$this->db->select('name,id')->from('category');
		$this->db->where('deleted',0);
		$query = $this->db->get();
	
		return $query->result_array();

	}
    
    public function update_cat($data){
    	$query=$this->db->set('name',$data['name'])->where('id',$data['id'])->update('category');
    	//echo $query;
    	$result= $this->db->insert_id();
    	return $result;
    }


    public function del_cat($data){
    	 $query=$this->db->set('deleted',1)->where('id',$data)->update('category');

	     $result= $this->db->insert_id();
	     $this->db->set('deleted',1)->where('cat_id',$data)->update('items');	
	     return $result;

    }

}

/* End of file category.php */
/* Location: ./application/models/category.php */