
<?php $this->load->view('admin/header');?>



                    <?php $this->load->view('admin/footer');?>

<scr

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