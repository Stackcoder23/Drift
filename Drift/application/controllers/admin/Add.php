<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/add');
    }

    public function add_item_data(){

        $this->load->model('items');
        $this->load->library('image_lib');

        $data = file_get_contents("php://input");

        $data = json_decode($_POST['data'],true);

        $item = array(
            'proname'   => $data['name'],
            'price'     => $data['price'],
            'sizecode'  => $data['sizecode'],
            'grip'      => $data['grip'],
            'type'      => $data['type'],
        );

        $id=$this->items->insert_item_data($item);
        if($id){
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
           return 1;
        }
        else{
            return 0;
        }

        

    	}


}

/* End of file add.php */

?>