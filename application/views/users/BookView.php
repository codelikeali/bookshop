<?php $this->load->view('admin/header');?>
<button class="w3-button w3-margin-top w3-green" data-toggle="modal" data-target="#modelId">➕ Add New Book</button>
<div class="row">
    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Books</h6>

    <table class="table mb-0">
        <thead>
            <tr class="border">
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Image</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Price</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Category</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Description</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Seller Name</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Download</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
							foreach ($book as $data) {
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
                <td class="align-middle py-5"><?=$data->book_price;?></td>
                <td class="align-middle py-5"><?=$data->book_category;?></td>
                <td class="align-middle py-5">
                    <span class="product__add-to-cart"><?=$data->book_desc;?></span>
                </td>
                <td class="align-middle py-5"><?=$data->user_name;?></td>
                <td class="align-middle py-5">
                    <a href="<?=base_url();?>upload/<?=$data->book_pdf;?>" download>
                        <button class="w3-button w3-black">Download Book</button>
                    </a>

                </td>
                <td class="align-middle py-5"><a onclick="return confirm('Are you sure?')" href="delete_Book?id=<?=$data->book_id?>"
                        class="btn btn-rounded btn-danger mb-5">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="add_book" method="post" enctype="multipart/form-data">
                        <label for="inputName">Book Category</label>
                        <div class="form-group">
                            <label for=""></label>
                            <div class="controls">
                                <select name="book_category" class="form-control select2" required>
                                    <option value="" selected disabled>Please select</option>
                                    <?php foreach ($category as $v) {
											echo('<option value='.$v->category.'>'.$v->category.'</option>');
										}?>

                                </select> </div>
                        </div>
                        <input type="hidden" name="type" value="add_book">
                        <label for="inputName">Book title</label>
                        <input type="text" class="form-control " required name="book_title">

                        <label for="inputName">Author Name</label>
                        <input type="text" class="form-control " required name="author_name">



                        <label for="inputName"> Desc</label>
                        <input type="text" class="form-control " required name="book_desc">

                        <label for="inputName"> Price</label>
                        <input type="text" class="form-control " required name="book_price">

                        <br><br>
                        <div class="form-group">
                            <label for="">Upload Book PDF</label>
                            <input type="file" class="form-control-file" name="book_file" required
                                placeholder="Upload Book PDF" onchange="checkPdf(this);" id="file_pdf"
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Upload PDF</small>
                        </div>

                        <br><br>
                        <div class="form-group">
                            <label for="">Upload Book Image 🖼</label>
                            <input type="file" class="form-control-file" name="book_image" required
                                onchange="checkImage(this);" id="file_image" placeholder="Upload Book Image"
                                aria-describedby="fileHelpId" />
                            <small id="fileHelpId" class="form-text text-muted">Upload Image</small>
                        </div>

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


<?php $this->load->view('admin/footer');?>
<script>
//Check for pdf

var _OnlyPdf = [".pdf"];

function checkPdf(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
        if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _OnlyPdf.length; j++) {
                var sCurExtension = _OnlyPdf[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() ==
                    sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }

            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _OnlyPdf.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}



//check for image

var _OnlyImg = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];

function checkImage(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
        if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _OnlyImg.length; j++) {
                var sCurExtension = _OnlyImg[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() ==
                    sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }

            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _OnlyImg.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
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