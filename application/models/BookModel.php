<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookModel extends CI_Model {


    // Fetch All Books from DB

    public function index(){
        return $this->db->get('book')->result();
    }


    public function category(){
        return $this->db->get('category')->result();
    }




    // Add Category Into Model
    public function add_category(){
        $category =  $this->input->post('category');
        $user_id=$this->session->userdata('user_data');

            $data = [
               
                'category'  => $category,
                'user_id'   =>  $user_id->id,
    
            ];
            
          $data = $this->db->insert('category', $data);
        
        if($data){
            $this->session->set_flashdata('message', 'Category Added Sucessfully');
            redirect('category');
        }
    }



    // Delete Category
    public function delete_category(){
        $this->db->where('category_id',  $this->input->get('id'));
        $data = $this->db->delete('category'); 
        
        if($data){
           $this->session->set_flashdata('message', 'Category Deleted Sucessfully');
           redirect('category');
       }
    }




     // Add Book into Db
     public function add_book()
     {

            
            $user_id=$this->session->userdata('user_data');
            $book_title =  $this->input->post('book_title');
            $author_name =  $this->input->post('author_name');
            $book_desc =  $this->input->post('book_desc');
            $book_price =  $this->input->post('book_price');
            $book_category =  $this->input->post('book_category');
            

            if(isset($_FILES["book_image"]["name"] ) && $_FILES["book_file"]["name"])  
            {  
                    $config['upload_path'] = './upload/';  
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf'; 
                    $config['encrypt_name'] = TRUE; 
                    $this->load->library('upload', $config);  


                    if(!$this->upload->do_upload('book_image'))  
                    {  
                    $this->upload->display_errors();  
                        //   $this->session->set_flashdata('error', 'Files must needed!!!!');
                        // redirect('books');
                    }  
                        else  
                        {  
                        $image = $data = $this->upload->file_name;
                            if(!$this->upload->do_upload('book_file'))  
                                {  
                                    $this->upload->display_errors();  
                                    //   $this->session->set_flashdata('error', 'Files must needed!!!!');
                                    // redirect('books');
                                }  
                                    else  
                                    {  
                                    $pdf_file = $this->upload->file_name;  
                                    
                                    $data = [
                
                                        'book_title'  => $book_title,
                                        'author_name'   =>  $author_name,
                                        'book_desc' =>  $book_desc,
                                        'book_price'    =>  $book_price,
                                        'book_image'    =>  $image,
                                        'book_pdf'    =>  $pdf_file,
                                        'book_category'    =>  $book_category,
                                        'user_id'   =>  $user_id->id,
                                        'user_name' =>  $user_id->name,
                            
                                    ];
                                    
                                $data = $this->db->insert('book', $data);
                                
                                //   print_r($data);
                                if($data){
                                    $this->session->set_flashdata('message', 'Book Added Sucessfully');
                                    redirect('books');
                                }
                                        
                                        //  echo '<img src="'.base_url().'upload/'.$data["book_image"].'" width="300" height="225" class="img-thumbnail" />';  
                                    }  
                        }  }else{
            $this->session->set_flashdata('error', 'Both Image and PDF file to rewquired');
                redirect('books');
            }

    }
 // Delete Category
    public function delete_Book(){
        $this->db->where('book_id',  $this->input->get('id'));
        $data = $this->db->delete('book'); 
        
        if($data){
           $this->session->set_flashdata('message', 'Book Deleted Sucessfully');
           redirect('books');
       }
    }


    //Load admin_users View
    public function admin_users(){
        return $this->db->get('user')->result();
    }


    //Get all Users Order
    public function userOrder(){
        

        return $this->db->select('*')
                          ->from('book')
                          ->join('book_order', 'book.book_id = book_order.book_id')
                        //   ->where('v.shop', $shop)
                          ->get()->result();
        

        

        
    }


    //send order to users
    public function send_order(){

       $id =  $this->input->get('id');
        $data =  $this->db->set('status','success')
             ->where('order_id',$id)
            ->update('book_order');
    
            if($data){
                $this->session->set_flashdata('message', 'Order Send Successfuly to Customer Address');
                redirect('userOrder');
            }
    }

    // delete User
    public function delete_user(){

        $this->db->where('id',  $this->input->get('id'));
        $data = $this->db->delete('user'); 
        
        if($data){
           $this->session->set_flashdata('message', 'User Deleted Sucessfully');
           redirect('admin_users');
       }
    }

    
}