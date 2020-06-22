<?php $this->load->view('admin/header');?>

<button class="w3-button w3-margin-top w3-green" data-toggle="modal" data-target="#modelId">➕ Add New Category</button>
<div class="row">
    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Category</h6>

    <table class="table " id="order-table">
        <thead>
            <tr class="border">

                <!-- <th scope="col" class="py-3 border-bottom-0 font-weight-medium">id</th> -->
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Category Name</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
							foreach ($category as $data) {
								# code...
							
							?>
            <tr class="border">
                <!-- <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6"><?=$data->category_id;?></th> -->
                <td class="align-middle py-5"><?=$data->category;?></td>
                <td><a onclick="return confirm('Are you sure?')" href="delete_category?id=<?=$data->category_id?>"
                        class="btn btn-rounded btn-danger mb-5">Delete</a></td>

            </tr>
            <?php } ?>

        </tbody>
    </table>
</div>


<div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="book-tab">
    <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-3">
        <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Wishlist</h6>
        <table class="table mb-0">

        </table>
    </div>
</div>






<?php $this->load->view('admin/footer');?>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="add_category" method="post">

                        <input type="hidden" name="type" value="add_category">
                        <label for="inputName">Category Name</label>
                        <input type="text" class="form-control " required name="category">
                        <!-- TODO: This is for server side, there is another version for browser defaults -->

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<script>
$('#exampleModal').on('show.bs.modal', event => {
    var button = $(event.relatedTarget);
    var modal = $(this);
    // Use above variables to manipulate the DOM

});

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