<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->load->view('register');

    }

    public function Register_user(){
        $this->load->library('image_lib');
        $this->load->model('admin');
		$data = file_get_contents("php://input");
        $data = json_decode($_POST['data'],true);
        //print_r($data);
        if($data['password']==$data['con_password']){

            $user =array(
                'fullname' => $data['firstname'],
                'address'  => $data['address'],
                
                'phone'    => $data['number'],
                'gender'   => $data['gender'],
                'email'    => $data['email'],
                'password' => $data['password'],
                'type'     => 0,
                'deleted'  => 0
            );

            $user_id = $this->admin->insert_user($user);
           // echo $user_id;die();
            if($user_id!=0){
                if($_FILES['file']['name']){
                    $location='upload/original';
                    $temp = $_FILES['file']['tmp_name'];
                    $name =$_FILES['file']['name'];
        
                    if(move_uploaded_file($temp,$location.'/'.$user_id."_".$_FILES['file']['name']))
                    {
                        $new_image='./upload/resize';
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $location.'/'.$user_id."_".$_FILES['file']['name'];
        
                        $config['maintain_ratio']  = TRUE;
                        $config['width']           = 100;
                        $config['height']          =100;
                        $config['new_image']       =$new_image;
                        $this->image_lib->initialize($config);
        
                        if( $this->image_lib->resize())
                        {
                          $image=$user_id."_".$_FILES['file']['name'];
        
                          $result=$this->admin->update_image_name($image,$user_id);
                        }
                    }
                }

                $user_vehicle = array(
                    'regno'     => $data['regno'],
                    'chassisno'  => $data['chassino'],
                    'type'      => $data['vehicle_type'],
                    'model'     => $data['model'],
                    'userid'   => $user_id
                );

                $vehicle_id = $this->admin->insert_vehicle($user_vehicle);
                if($vehicle_id !=0){
                    $result['status'] = 1;
                    $result['msg']    = 'Data inserted Successfully';
                }
                echo json_encode($result);

            }else{
                $result['status'] = 2;
                $result['msg']    = 'User already exists!!';
                echo json_encode($result);
            }

          
           
        }else{
            $result['status'] = 3;
            $result['msg']    = "Password and confirm password doest not match";
            echo json_encode($result);
        }
       
        

    }

}

/* End of file Register.php */


?>