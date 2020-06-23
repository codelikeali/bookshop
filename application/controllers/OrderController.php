<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller {


    //Order by Users
    public function create_order(){

        $this->load->model('OrderModel');
        $this->OrderModel->create_order();
    }


    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_data')){
            $this->session->set_flashdata('error', 'Before any Order. You need to login into account');
            redirect('home');
            
       }
       


       
    }
}

?>