<?php $this->load->view('admin/header');?>

<div class="row">
    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Users Orders</h6>

    <table class="w3-table  w3-responsive mb-0 " id="order-table">
        <thead>
            <tr class="border">
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Detail</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Buyer Name</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Buyer Contact</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Buyer Email</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Buyer Address</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Price</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Category</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Description</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Buyer Name</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Status</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
							foreach ($data as $data) {
								# code...
							
							?>
            <tr class="border">
                <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                    <div class="d-flex align-items-center">
                        <a class="d-block" href="#">
                            <img class="img-fluid" height="70px" width="70px"
                                src="<?=base_url();?>upload/<?=$data->book_image;?>" alt="Image-Description">
                        </a>
                        <div class="ml-xl-4">
                            <div class="font-weight-normal">
                                <a href="#"><?=$data->book_title;?></a>
                            </div>
                            <div class="font-size-2"><a href="#" class="text-gray-700"
                                    tabindex="0"><?=$data->author_name;?></a></div>
                        </div>
                    </div>
                </th>
                <td class="align-middle py-5"><?=$data->user_name;?></td>
                <td class="align-middle py-5"><?=$data->user_contact;?></td>
                <td class="align-middle py-5"><?=$data->user_email;?></td>
                <td class="align-middle py-5"><?=$data->user_address;?></td>
                <td class="align-middle py-5"><?=$data->book_price;?></td>
                <td class="align-middle py-5"><?=$data->book_category;?></td>
                <td class="align-middle py-5">
                    <span class="product__add-to-cart"><?=$data->book_desc;?></span>
                </td>
                <td class="align-middle py-5"><?=$data->user_name;?></td>
                <td class="align-middle py-5"><?php if($data->status=='pending')
                {echo '<span class="w3-orange">In Pending</span>';}else{ echo '<span class="w3-green">Order Success</span>';}?></td>
                <td class="align-middle py-5">
                    <?php if($data->status=='pending'){?>
                        <a onclick="return confirm('Are you sure?')" href="send_order?id=<?=$data->order_id?>"
                        class="w3-button w3-red mb-5">Order Send</a>
                    <?php } else{?>
                        <button
                        class="w3-button w3-green" disabled>Order Completed</button>
                    <?php }?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?php $this->load->view('admin/footer');?>
<script>

$(function() {
    "use strict";



    $('#order-table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });


});
</script>