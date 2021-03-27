<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_admin extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/settings_admin');
    }

    public function updatepassword(){
        $this->load->model('admin');
		$data = file_get_contents("php://input");
        $data = json_decode($data,true);
        $check = $this->admin->check_user_exists($data['email']);
        if($check !=0){
            if($data['password']==$data['con_password']){
                $update = $this->admin->updatepassword($data);
                if($update > 0){
                    $result['status'] = 1;
                    $result['msg']    = 'Password Updated Successfully';
                }else{
                    $result['status'] = 2;
                    $result['msg']    = 'Password Not Updated';

                }
            }else{
                $result['status'] = 3;
                $result['msg']    = 'Password and Confirm Password doesnt not match';
            }
        }else{
            $result['status'] = 4;
            $result['msg']    = 'User does not exists';
        }
        echo json_encode($result);
    }

}

/* End of file Settings_admin.php */

?>