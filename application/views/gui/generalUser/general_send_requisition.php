<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>User/Stock/Product</title>
    <?php
    if( $this->session->userdata('type') != 'staff' && $this->session->userdata('type') != 'faculty'){
        header('Location: '.base_url().'login');
    }
    include 'general_user_header.php';?>
    <?php include 'general_user_nav_menu.php';?>
    <!-- jQuery -->
</head>
<body>
<!-- Site Overlay -->
<div class="site-overlay"></div>
<!-- Your Content -->
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Send Requisition</h1>
    <form id="requisition" method="get" name="requisition" action="<?php echo base_url();?>generalUser/addRequisition">
        <select name="category" id="category" style="width: 250px; padding: 10px; margin: 10px">
            <option  value="">Select Category</option>
            <?php
            if($cat_list != null){
                foreach ($cat_list as $category){?>
                    <option value="<?php echo $category['c_id']; ?>"><?php echo $category['cat_name']; ?></option>
                <?php }
            }
            ?>
        </select>
        <select disabled = ""  id="product" name="product" style="width: 250px; padding: 10px; margin: 10px">
            <option value="default">Select Product</option>

        </select>
        <br>
        <input type="number" name="quantity" placeholder="Enter quantity" style="width: 250px; padding: 10px; margin: 10px" required>
        <input type="submit" value="Send"  class="btn btn-success" style="width: 250px; padding: 10px; margin: 10px">
        <input type="submit" value="Cancel"  class="btn btn-danger" style="width: 250px; padding: 10px; margin: 10px">
    </form>
</div>
<!-- Pushy JS -->
<script src="<?php echo base_url();?>/assets/js/pushy.min.js"></script>
<script>
    $(document).ready(function () {
        $('#category').on('change',function () {
            var category_id = $(this).val();
            //alert(category_id);
            if(category_id == ""){
                $('#product').prop('disabled',true);
            }else{
                $('#product').prop('disabled',false);
                $.ajax({
                    url: "<?php echo base_url()?>officer/getProductByCid",
                    type: "POST",
                    data: {'category_id': category_id},
                    dataType: 'json',
                    success : function (data) {
                        //alert('ok');
                        $('#product').html(data);
                    },
                    error: function () {
                        alert('No product available of this category');
                    }
                });
            }
        });
    });
</script>
</body>
</html>

