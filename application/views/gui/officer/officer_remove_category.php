<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Remove Category</title>
    <?php
    if( $this->session->userdata('type') != 'officer'){
        header('Location: '.base_url().'login');
    }
    include 'officer_header.php';?>
    <?php include 'officer_nav_menu.php';?>
</head>
<body>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->

<div id="container">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid;padding-bottom: 4px;"> Remove Category</h1>
    <form id="requisition" onsubmit="return removeCategoryValidation()" action="<?php echo base_url();?>officer/removeACategory" method="get">
        <select name="category" id="category" style="width: 250px; padding: 10px; margin: 10px">
            <option value="default">Select Category</option>
            <?php
            if($cat_list != null){
                foreach ($cat_list as $category){?>
                    <option value="<?php echo $category['c_id']; ?>"><?php echo $category['cat_name']; ?></option>
                <?php }
            }
            ?>
        </select>
        <p id="wrongCategory" style="color: red;margin-left: 10px"></p>
        <input type="submit" value="Remove"  class="btn btn-success" style="width: 250px; padding: 10px; margin: 10px"><br>

    </form>
</div>
<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="../assets/js/pushy.min.js"></script>
<script src="../assets/js/vaildation.js"></script>

</body>
</html>

