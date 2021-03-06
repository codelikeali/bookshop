<?php $this->load->view('admin/header');?>
<?php  $user_session=$this->session->userdata('user_data');?>
<div class="row">
    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1"></h6>

    <div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
        <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Dashboard</h6>
        <div class="ml-lg-1 mb-4">
            <span class="font-size-22">Hello <?=$user_session->name;?></span>
            <span class="font-size-2"> (not <?=$user_session->name;?>? <a class="link-black-100" href="logout">Log out</a>)</span>
        </div>
        <div class="mb-4">
            
        </div>
        <div class="row no-gutters row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="border py-6 text-center">
                    <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                        <span class="flaticon-order font-size-10 btn-icon__inner"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Total Orders <h5><?=$total_orders?></h5></div>
                </div>
            </div>
            <div class="col">
                <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                        <span class="flaticon-cloud-computing font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Total Order Success <h5><?=$completed_orders?></h5></div>
                </div>
            </div>
            <div class="col">
                <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                        <span class="flaticon-place font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Orders In Pending <h5><?=$pending_orders?></h5></div>
                </div>
            </div>
            <div class="col">
                <div class="border py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                        <span class="flaticon-user-1 font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Total Registered Users <h5><?=$usersDetail?></h5></div>
                </div>
            </div>
            <div class="col">
                <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200  rounded-circle px-4 mb-2">
                        <span class="flaticon-heart font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Total Books <h5><?=$total_books?></h5></div>
                </div>
            </div>
            <div class="col">
                <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                        <span class="flaticon-exit font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Book Category <h5><?=$total_category?></h5></div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/footer');?>
</div>