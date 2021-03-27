<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Model {

	public function get_cat(){
		
		$this->db->select('id,name');
		$this->db->from('category');
		$this->db->where('deleted',0);
		$query = $this->db->get();
	
		return $query->result();
	}
    

	public function insert_item_data($data){
        $this->db->select('proname');
		$this->db->from('product');
		$this->db->where('type',$data['type']);
		$this->db->where('proname',$data['proname']);
		$query=$this->db->count_all_results();

		//print_r($data);
		//echo $query;
		if($query==0){
				$query=$this->db->insert("product",$data);
		       return $this->db->insert_id();
		}
		else{
			return 0;
		}
	
	}

	public function update_image_name($image,$id){
		//echo $image;
		$this->db->set('pimage',$image);
	    $this->db->where('proid', $id);
	    $this->db->update('product');
	    echo 1;  
	}
     
	//to get item list
	public function item_list(){
		$this->db->select('*');
		$this->db->from('product');
		
		$this->db->where('product.deleted',0);
	
	    $this->db->order_by('product.proid','DESC');
        $query=$this->db->get();
		return $query->result_array();

	}

	//to update item_details
	public function update($data){
		$id=$data['proid'];

       // echo $data['name'];
	   $details = array(
		// 'brand'=> $data['brand'],
		'proname'   => $data['proname'],
		'price'     => $data['price'],
		'sizecode'  => $data['sizecode'],
		'grip'      => $data['grip'],
		'type'      => $data['type'],
	);

		$this->db->set($details);
		$this->db->where('proid',$id);	
		$this->db->update('product');
		
		//if($this->db->affected_rows()>0){
			return $id;	
		// }else{
		// 	return 0;
		// }
       
       
	}

	//to delete item 
	public function del_item($data){
		$id=$data;
	   $query=$this->db->set('deleted',1)->where('proid',$id)->update('product');
	   return $this->db->insert_id();

	}
	

	//to get the items details from item table
	public function get_items_data(){
		$this->db->select('items.id,category.name as category,items.name as item,items.price,items.image,items.quantity');
		$this->db->from('items');
		$this->db->join('category', 'items.cat_id = category.id','left');
		$this->db->where('items.deleted',0);
		$this->db->order_by('price','asc');

        $query=$this->db->get();
        return $query->result_array();

   	}

   	//to get the sum of each item based on quantity
   	public function get_item_amount($data){
   		//echo $data['qty'];
		$this->db->select("sum(price*$data[qty]) as total",FALSE);
		$this->db->from('items');
		$this->db->where('id',$data['item_id']);
		$query=$this->db->get();
		return $query->row_array();
	}

    

}

/* End of file items.php */
/* Location: ./application/models/items.php */