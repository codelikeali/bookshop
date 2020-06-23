<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {


    //Load Dashboard all books
    public function index(){
        
        $data['category'] =  $this->db->get('category')->result();
        $this->load->view('dashboard',$data);
    }


    // redirect after login onto user dashboard
    public function dashboard(){
    $this->load->model('UsersModel');
      $data['data'] = $this->UsersModel->order_detail();
         $this->load->view('users/user_dash',$data);
        // print_r($data);
    }
    
    //Users side order

    //Order by Users
    public function order_detail(){

       
    }

}



?>