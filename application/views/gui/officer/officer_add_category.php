<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Add Category</title>
    <?php
    if( $this->session->userdata('type') != 'officer'){
        header('Location: '.base_url().'login');
    }
    include 'officer_header.php';?>
    <?php include 'officer_nav_menu.php';?>

</head>
<body style="background-color: #cecece">
<!-- Site Overlay -->
<div class="site-overlay">
    <button class="menu-btn" style="margin-top: 20px"> Menu</button>
</div>

<!-- Your Content -->

<div id="container">

    <h1 style=" text-align: center; color: darkblue; border-bottom: 2px grey solid" class="m-b-5"> Add Category</h1>
    <form id="requisition" onsubmit="return addCategoryValidation()" action="<?php echo base_url()?>/officer/addCategoryToDatabase" method="get" name="cat">
        <input type="text" name="category" placeholder="Enter category name" style="width: 250px; padding: 10px; margin: 10px" required><br>
        <p id="wrongCategory" style="color: #a82b3b;margin-left: 10px">
            <?php
            if(isset($_REQUEST['msg'])){
                echo $_REQUEST['msg'];
            }
            ?>
        </p>
        <textarea name="details" placeholder="Enter Details" style="width: 250px; padding: 10px; margin: 10px" required></textarea>
        <input type="submit" value="Add"  class="btn btn-success" style="width: 250px; padding: 10px; margin: 10px"><br>
        <input type="reset" value="Cancel"  class="btn btn-danger" style="width: 250px; padding: 10px; margin: 10px">
    </form>

</div>

<!-- Pushy JS -->
<script src="../assets/js/pushy.min.js"></script>
<script src="../assets/js/vaildation.js"></script>

</body>
</html>

