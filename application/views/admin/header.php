<?php $this->load->view('css');?>
<title>Admin Dashboard</title>
<main id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-2 border-right">
                <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">My account</h6>
                <?php
                if($this->session->flashdata('message')){
                    ?>
                <div class="alert alert-success"><?=$this->session->flashdata('message');?></div>
                <?php
                }elseif($this->session->flashdata('error')){
                    ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('error');?></div>
                <?php
                }
              ?>
                <div class="tab-wrapper">
                    <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">

                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab"
                                href="home" aria-controls="pills-one-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Home</span>
                            </a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab"
                                data-toggle="pill" href="#pills-one-example1" role="tab"
                                aria-controls="pills-one-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" 
                                href="category" role="tab" aria-controls="book" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Category</span>
                            </a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" 
                                href="books" role="tab" aria-controls="book" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Books</span>
                            </a>
                        </li>
                       
                      
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab"
                                data-toggle="pill" href="admin-profile" role="tab"
                                aria-controls="pills-five-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600"></span>
                            </a>
                        </li>
                       
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0"  href="admin_users" role="tab"
                                aria-controls="pills-five-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Users</span>
                            </a>
                        </li>

                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab"
                                data-toggle="pill" href="admin-buyers" role="tab"
                                aria-controls="pills-five-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Buyers</span>
                            </a>
                        </li>

                     

                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" href="logout">
                                <span class="font-weight-normal text-gray-600">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
               
                    
