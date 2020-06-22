<?php $this->load->view('admin/header');?>

<button class="w3-button w3-margin-top w3-green" data-toggle="modal" data-target="#modelId">➕ Add New User</button>
<div class="row">
    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">All Users Detail</h6>

    <table class="table " id="order-table">
        <thead>
            <tr class="border">

                <!-- <th scope="col" class="py-3 border-bottom-0 font-weight-medium">id</th> -->
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Name</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Email</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Contact</th
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">CNIC</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Role</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Password</th>

            </tr>
        </thead>
        <tbody>
            <?php
							foreach ($admin_users as $data) {
								# code...
							
							?>
            <tr class="border">
                <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6"><?=$data->name;?></th>
                <td class="align-middle py-5"><?=$data->email;?></td>
                <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6"><?=$data->contact;?></th>
                <td class="align-middle py-5"><?=$data->cnic;?></td>
                <td class="align-middle py-5"><?=$data->role;?></td>
                <td><input class="align-middle py-5" type="password" onkeydown="UpdatePassword(this)" id="<?=$data->id?>" ></td>
                <td><a onclick="return confirm('Are you sure?')" href="delete_user?id=<?=$data->id?>"
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
                <form action="register-user" method="post">
                                     

                                     <div class="form-group mb-4">
                                             <div class="js-form-message js-focus-state">
                                                 <label id="name" class="form-label"
                                                     for="name">Name *</label>
                                                 <input type="text" class="form-control rounded-0 height-4 px-4"
                                                     name="name" id="name"
                                                     placeholder="User name"
                                                     aria-label="your name"
                                                     aria-describedby="name" required>
                                             </div>
                                         </div>
 
 
                                         <div class="form-group mb-4">
                                             <div class="js-form-message js-focus-state">
                                                 <label id="cnic" class="form-label"
                                                     for="cnic">cnic *</label>
                                                 <input type="number" class="form-control rounded-0 height-4 px-4"
                                                     name="cnic" id="cnic"
                                                     placeholder="cnic"
                                                     aria-label="cnic"
                                                     aria-describedby="cnic" required>
                                             </div>
                                         </div>

                                         <div class="form-group mb-4">
                                             <div class="js-form-message js-focus-state">
                                                
                                                  <label for="">Select Role of User</label>
                                                  <select class="form-control" name="role" id="">
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>
                                                    
                                                  </select>
                                         
                                             </div>
                                         </div>
 
 
                                         <div class="form-group mb-4">
                                             <div class="js-form-message js-focus-state">
                                                
                                                 <div class="form-group">
                                                   <label for="">Address</label>
                                                   <textarea class="form-control"  required name="address" rows="3"></textarea>
                                                 </div>
                                             </div>
                                         </div>
 
                                         <div class="form-group mb-4">
                                             <div class="js-form-message js-focus-state">
                                                 <label id="contact" class="form-label"
                                                     for="contact">contact *</label>
                                                 <input type="number" class="form-control rounded-0 height-4 px-4"
                                                     name="contact" id="contact"
                                                     placeholder="phone no#"
                                                     aria-label="contact"
                                                     aria-describedby="contact" required>
                                             </div>
                                         </div>
                                         
                                         <div class="form-group mb-4">
                                             <div class="js-form-message js-focus-state">
                                                 <label id="signinEmailLabel1" class="form-label"
                                                     for="signinEmail1">Email *</label>
                                                 <input type="email" class="form-control rounded-0 height-4 px-4"
                                                     name="email" id="signinEmail1"
                                                     placeholder="creativelayers088@gmail.com"
                                                     aria-label="creativelayers088@gmail.com"
                                                     aria-describedby="signinEmailLabel1" required>
                                             </div>
                                         </div>
 
 
                                         <div class="form-group mb-4">
                                             <div class="js-form-message js-focus-state">
                                                 <label id="signinPasswordLabel1" class="form-label"
                                                     for="signinPassword1">Password *</label>
                                                 <input type="password" class="form-control rounded-0 height-4 px-4"
                                                     name="password" id="signinPassword1" placeholder="" aria-label=""
                                                     aria-describedby="signinPasswordLabel1" required>
                                             </div>
                                         </div>
 
 
                                         <div class="mb-3">
                                             <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create
                                                 Account</button>
                                         </div>
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

function UpdatePassword(ele) {
    if(event.key === 'Enter') {
        const pass = ele.value;
        const id = ele.id;
		$.ajax({
   		type: "POST",
           url: "<?php echo base_url('UpdatePass')?>",
			  data:{pass:pass,id:id},
			 
			  success: function(data){
			     // $("#res").text(data);
				alert(data)
                                    // window.location = "<?php //echo base_url('user') ?>";
            
			  }	  
   });
   
            
    }
}
</script>