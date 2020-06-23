<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    //fetch Dashboard Data from Database
    function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("book");
  if($query != '')
  {
   $this->db->like('author_name', $query);
   $this->db->or_like('book_category', $query);
   $this->db->or_like('book_title', $query);
   $this->db->or_like('book_price', $query);
  }
  $this->db->order_by('book_id', 'DESC');
  return $this->db->get();
 }





 // Get Admin DashBoard deatails


public function usersDetail(){
    $query=$this->db
    ->select('name')
    
    ->get('user');
    return $query->num_rows();
}


public function pending_orders(){
    $query=$this->db
    ->select('status')
    ->where('status','pending')
    ->get('book_order');
    return $query->num_rows();
    
}

public function completed_orders(){
    $query=$this->db
    ->select('status')
    ->where('status','success')
    ->get('book_order');
    return $query->num_rows();
}

public function total_orders(){
    $query=$this->db
    ->select('status')
    ->get('book_order');
    return $query->num_rows();
}

public function total_books(){
    $query=$this->db
    ->select('book_id')
    ->get('book');
    return $query->num_rows();
}


public function total_category(){
    $query=$this->db
    ->select('category')
    ->get('category');
    return $query->num_rows();
}
}


?>