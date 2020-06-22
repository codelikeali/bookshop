<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookController extends CI_Controller {


        //Load Books View
    public function index(){
        $data['book'] = $this->BookModel->index();
        $data['category'] = $this->BookModel->category();
        $this->load->view('admin/BookView',$data);
    }



    public function category(){

        $data['category'] = $this->BookModel->category();
        
        $this->load->view('admin/categoryView',$data);
    
      

        
    
    }

    // Add Category into model or database

    public function add_category(){

        
        $this->BookModel->add_category();
       
    }

    // Add Book into Db
    public function add_book(){
        $this->BookModel->add_book();
    }
    

    //Delete Category

    public function delete_category(){

        $this->BookModel->delete_category();
    }

    public function delete_Book(){

            $this->BookModel->delete_Book();
        }



    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_data')){
            $this->session->set_flashdata('error', 'You can`t accecs system without login');
            redirect('login');
            
       }
        $this->load->model('BookModel');


       
    }

         //Load admin_users View
         public function admin_users(){
            $data['admin_users'] = $this->BookModel->admin_users();
       
            $this->load->view('admin/adminuserView',$data);
        }


        //delete User
        public function delete_user(){

            $this->BookModel->delete_Book();
        }

            
    

    }
    
    
    
    ?>