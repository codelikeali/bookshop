<?php $this->load->view('users/header');?>
<div class="row">
    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Users Orders</h6>

    <table class="w3-table  w3-responsive mb-0 " id="order-table">
        <thead>
            <tr class="border">
            <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Order ID</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Detail</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Shipping Name</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Buyer Contact</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Address</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Price</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Status</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
							foreach ($data as $data) {
								# code...
							
							?>
            <tr class="border">
            <td class="align-middle py-5"><?=$data->order_id;?></td>
                <td class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                    <div class="d-flex align-items-center">
                        <a class="d-block" href="#">
                            <img class="img-fluid" height="100px" width="100px"
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
                </td>
                <td class="align-middle py-5"><?=$data->user_name;?></td>
                <td class="align-middle py-5"><?=$data->user_contact;?></td>
                
                <td class="align-middle py-5"><?=$data->user_address;?></td>
                <td class="align-middle py-5"><?=$data->book_price;?></td>
    
               
               
                <td class="align-middle py-5"><?php if($data->status=='pending')
                {echo '<span class="w3-orange">In Process</span>';}else{ echo '<span class="w3-green">Book send to your Address</span>';}?></td>
                <td class="align-middle py-5">
                    <?php if($data->status=='pending'){?>
                        <button onclick="return confirm('Are you sure?')" href="send_order?id=<?=$data->order_id?>"
                        class="w3-button w3-red " disabled>In Process</button>
                    <?php } else{?>
                        <a href="<?=base_url();?>upload/<?=$data->book_pdf;?>" download>
                        <button class="w3-button w3-black">Download Book</button>
                    </a>
                    <?php }?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('users/footer');?>
<script src="<?=base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>

<script src="<?=base_url()?>assets/datatable/datatables.min.js"></script>

<script>
function UpdatePassword(ele) {
    if (event.key === 'Enter') {
        const pass = ele.value;
        const id = ele.id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('UpdatePass')?>",
            data: {
                pass: pass,
                id: id
            },

            success: function(data) {
                // $("#res").text(data);
                alert(data);
                // window.location = "<?php echo base_url('user') ?>";

            }
        });


    }
}

$(function() {
    "use strict";



    $('#order-table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });


}); // End of use strict


</script>