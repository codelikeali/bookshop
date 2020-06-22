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
}


?>