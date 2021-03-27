<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/edit');
    }

    public function get_items(){
		$this->load->model('items');
		$result=$this->items->item_list();
		echo json_encode($result);
    }
    
    public function update_item(){
		$this->load->model('items');
		$this->load->library('image_lib');
		$data = file_get_contents("php://input");

        $data = json_decode($_POST['data'],true);
		
		$id= $data['proid'];
		$result=$this->items->update($data);
		
        $name =$_FILES['file']['name'];
         if($name){
           $location='upload/original';
            $temp = $_FILES['file']['tmp_name'];
            $name =$_FILES['file']['name'];
             
            if(move_uploaded_file($temp,$location.'/'.$id."_".$_FILES['file']['name']))
            {
                $new_image='./upload/resize';
                $config['image_library'] = 'gd2';
                $config['source_image'] = $location.'/'.$id."_".$_FILES['file']['name'];

                $config['maintain_ratio']  = TRUE;
                $config['width']           = 100;
                $config['height']          =100;
                $config['new_image']       =$new_image;
                $this->image_lib->initialize($config);

                if( $this->image_lib->resize())
                {
                  $image=$id."_".$_FILES['file']['name'];

                  $result=$this->items->update_image_name($image,$id);
                }
              
            }
           echo 1;
        }
        else{
            echo 0;
        }
	}

    public function delete_item(){
        $this->load->model('items');
        $data = file_get_contents("php://input");
        $data = json_decode($data,true);
        $id=$this->items->del_item($data);
        echo $id;
    }

}

/* End of file Edit.php */

?>
