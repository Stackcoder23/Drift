<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_order_details extends CI_Model {

	//to insert data into user_order_details
	public function insert_data($data){
		$j=0;
		for($i=0;$i<1;$i++)
		{	
			for($k=0;$k<$data['length'];$k++)
			{   	
				if($j<=$data['length'])
				{	
					$this->db->set('order_id',$data['order_id']);
					$this->db->set('item_id',$data['item_id'][$j]);
					$this->db->set('price',$data['price'][$j]);
					$this->db->set('quantity',$data['quantity'][$j]);
					$this->db->set('amount',$data['amt'][$j]);
					$query=$this->db->insert('user_order_details');
				}
				$j++;
			}
			
		}
		echo 1;
	}
	 
    
   //to get the total bill amount
   public function total_bill($data){
		// echo $data['order_id'];
		$this->db->select('sum(amount) as total_amount');
		$this->db->from('user_order_details');
		$this->db->where('order_id',$data);
		$query =$this->db->get();
		return $query->row();
   }

   // to get order history
   public function history(){
    	$user_id=$this->session->user_id;
    	$this->db->select('user_order.id,count(items.name) as total,user_order.date,user_order.timing,user_order.address,user_order.total_amount');
    	$this->db->from('user_order');
    	$this->db->join('user_order_details','user_order.id=user_order_details.order_id','inner');
    	$this->db->join('items','user_order_details.item_id=items.id','inner');
    	$this->db->where('user_order.user_id',$user_id);
    	$this->db->group_by('user_order.id');
    	$query=$this->db->get();
    	return $query->result_array();
   }



   //to get complete details of order history
   public function order_history($data){
  // SELECT product.proname,product.type,product.grip,product.price FROM `product` inner join orders on orders.proid=product.proid inner join customer on customer.userid=orders.userid where orders.userid=4

    $this->db->select('product.proname,product.type,product.grip,product.price,customer.fullname');
    $this->db->from('product');
    $this->db->join('orders','orders.proid=product.proid','inner');
    $this->db->join('customer','customer.userid=orders.userid','inner');
  
    $this->db->where('orders.userid',$data);
    $query=$this->db->get();
    
    return $query->result_array();
  
   }


     public function order_list(){
    

    	$this->db->select('orders.oid,orders.userid,customer.fullname,count(orders.proid) as total,sum(orders.total_amount) as total_amount');
    	$this->db->from('orders');
    	$this->db->join('customer','orders.userid=customer.userid','inner');
    	
    	$this->db->group_by('orders.userid');
    	$query=$this->db->get();
    	return $query->result_array();
   }
}

/* End of file user_order_details.php */
/* Location: ./application/models/user_order_details.php */