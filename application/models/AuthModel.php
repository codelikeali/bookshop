<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {


    //Login  check in database
    public function login(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');
  
          $password = md5($password);
  
          $query = $this->db->where([
              'email' => $email,
              'password' => $password,
          ])->get('user');
      
  
          if($query->num_rows()){
              return ($query->row());
          }
          else{
              return false;
          }

       

    }


    //Registe or Signup Users
    public function register(){

        $data = [
            'name' => $this->input->post('name'),
            'contact' => $this->input->post('contact'),
            'email' => $this->input->post('email'),
            'cnic' => $this->input->post('cnic'),
            'address' => $this->input->post('address'),
            'password' => md5($this->input->post('password')),
        ];

       
        $data = $this->db->insert('user', $data);
    
        if($data){
            $this->session->set_flashdata('message', ':) Thanks for Created Account. Please Login into Account');
            redirect('');
        }
        else{
            $this->session->set_flashdata('message', 'OOPS! Something went wrong!!');
            redirect('');
        }
    }

     //Registe or Signup Users
     public function register_by_admin(){

        $data = [
            'name' => $this->input->post('name'),
            'contact' => $this->input->post('contact'),
            'email' => $this->input->post('email'),
            'cnic' => $this->input->post('cnic'),
            'address' => $this->input->post('address'),
            'password' => md5($this->input->post('password')),
            'role'      =>$this->input->post('role')
        ];

       
        $data = $this->db->insert('user', $data);
    
        if($data){
            $this->session->set_flashdata('message', 'user Added Success');
            redirect('admin_users');
        }
        else{
            $this->session->set_flashdata('message', 'OOPS! Something went wrong!!');
            redirect('admin_users');
        }
    }


    public function updatePass(){

        echo "updatePass";

    }


  

}

?>