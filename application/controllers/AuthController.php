<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {





    //Login user
    public function login(){

        $this->load->model('AuthModel');

        $queryEXC = $this->AuthModel->login();

        if($queryEXC){
            $this->session->set_userdata('user_data',$queryEXC);
            if($queryEXC ->role == 'user'){
           
			//$login_data = $this->session->userdata('user_data');
            redirect('user-dashboard');
            }else{
                redirect('admin');
            }
            print_r($queryEXC);
           

        }
        else{
            // flashdata and return to login page and show error.
            $this->session->set_flashdata('error', 'Provide Correct Account Details');
            redirect('');
        }

    }

    // user register
    public function register(){

        $this->load->model('AuthModel');
        $this->AuthModel->register();
    }

    // update pssword
    public function updatePass(){

        $pass =  $this->input->post('pass');
        $id =  $this->input->post('id');
        $data =  $this->db->set('password',md5($pass))
             ->where('id',$id)
            ->update('user');
    
            if($data){
                echo 'Password Updated Success';
            }

    }

    //logout from account
    public function logout(){
      
        $this->session->unset_userdata('user_data');
        $this->session->set_flashdata('message', 'Logout Successfully');
        redirect('');
    }
    

  // user register by Admin
  public function register_by_admin(){

    $this->load->model('AuthModel');
    $this->AuthModel->register_by_admin();
}

    

}

?>