<?php $this->load->view('admin/header');?>
<link rel="stylesheet" href="<?=base_url();?>assets/css/w3.css">
<h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Dashboard</h6>
                            <div class="ml-lg-1 mb-4">
                                <span class="font-size-22">Hello alitfn58</span>
                                <span class="font-size-2"> (not alitfn58? <a class="link-black-100" href="#">Log
                                        out</a>)</span>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0 font-size-2 ml-lg-1 text-gray-600">From your account dashboard you can
                                    view your <span class="text-dark">recent orders,</span> manage your <span
                                        class="text-dark">shipping and billing addresses,</span> and edit your <span
                                        class="text-dark">password and account details.</span></p>
                            </div>
                            <div class="row no-gutters row-cols-1 row-cols-md-2 row-cols-lg-3">
                                <div class="col">
                                    <div class="border py-6 text-center">
                                        <a href="#" class="btn btn-success rounded-circle px-4 mb-2">
                                            <span class="flaticon-order font-size-10 btn-icon__inner"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">Total Orders</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border border-left-0 py-6 text-center">
                                        <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                            <span
                                                class="flaticon-cloud-computing font-size-10 btn-icon__inner text-primary"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">Total Books</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border border-left-0 py-6 text-center">
                                        <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                            <span
                                                class="flaticon-gallery font-size-10 btn-icon__inner text-primary"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">All Books Category</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border py-6 text-center">
                                        <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                            <span
                                                class="flaticon-user-1 font-size-10 btn-icon__inner text-primary"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">Registered Users</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border border-left-0 py-6 text-center">
                                        <a href="#" class="btn bg-gray-200  rounded-circle px-4 mb-2">
                                            <span
                                                class="flaticon-heart font-size-10 btn-icon__inner text-primary"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">Wishlist</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border border-left-0 py-6 text-center">
                                        <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                            <span
                                                class="flaticon-exit font-size-10 btn-icon__inner text-primary"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">Orders</div>
                                    </div>
                                </div>

                                <?php $this->load->view('admin/footer');?>