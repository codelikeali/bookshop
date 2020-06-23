<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderModel extends CI_Model {

       //Order by Users
       public function create_order(){

        $data = $this->session->userdata('user_data');
        $user_id =   $data->id;
        $id  =$this->input->get('id');
        $price  =$this->input->get('price');

        $data = [
            'book_id' => $id,
            'user_id' => $user_id,
            'price' =>  $price,
            'user_name' => $data->name,
            'user_email'=> $data->email,
            'user_contact'=> $data->contact,
            'user_address'=> $data->address,
        ];

        $data = $this->db->insert('book_order', $data);
    
        if($data){
            $this->session->set_flashdata('message', 'Order Placed Successfully! After verify Payment and verify Call your order ship.');
            redirect('home');
        }
        else{
            $this->session->set_flashdata('message', 'OOPS! Something went wrong!!');
            redirect('home');
        }

        
    }
}

?>