<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

     //Get all Users Order
     public function order_detail(){
        
        $data = $this->session->userdata('user_data');
        return $this->db->select('*')
                          ->from('book')
                          ->where('book_order.user_id', $data->id)
                          ->join('book_order', 'book.book_id = book_order.book_id')
                          
                          ->get()->result();
        

        

        
    }

    }