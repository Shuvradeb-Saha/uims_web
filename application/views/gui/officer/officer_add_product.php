<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Add Product</title>
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

<div id="container" class="col-*-12">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Add Product</h1>
    <div class="row">
        <div class="col-lg-8 col-md-0">
        </div>
        <div class="col-lg-6 col-md-12">
            <form id="requisition" action="<?php echo base_url();?>/officer/addProductToDatabase" onsubmit="addProductValidation()" method="get">
                <select name="category" id="category" style="width: 250px; padding: 10px; margin: 10px">
                    <option value="default">Select Category</option>
                    <?php
                    if($cat_list != null){
                        foreach ($cat_list as $category){?>
                            <option value="<?php echo $category['c_id']?>"><?php echo $category['cat_name']?></option>

                        <?php    }

                    }
                    ?>
                </select>
                <p id="wrongCategory" style="color: red;margin-left: 10px"></p>
                <input type="text" name="p_name" id="product" placeholder="Enter product name" style="width: 250px; padding: 10px; margin: 10px" required><br>
                <p id="wrongProduct" style="color: red;margin-left: 10px">
                    <?php
                    if(isset($_REQUEST['msg'])){
                        echo $_REQUEST['msg'] ;
                    }

                    ?>
                </p>
                <input type="text" id="lotNumber" name="lot_no" placeholder="Enter lot number" style="width: 250px; padding: 10px; margin: 10px" required><br>
                <p id="wrongLotNumber" style="color: red;margin-left: 10px"></p>
                <input type="number" name="quantity" min="0" placeholder="Enter quantity" style="width: 250px; padding: 10px; margin: 10px" required> <br>
                <input type="submit" value="Add"  class="btn btn-success" style="width: 250px; padding: 10px; margin: 10px"><br>
                <input type="reset" value="Cancel"  class="btn btn-danger" style="width: 250px; padding: 10px; margin: 10px">
            </form>
        </div>
        <div class="col-lg-3">

        </div>
    </div>

</div>


<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="../assets/js/pushy.min.js"></script>
<script src="../assets/js/vaildation.js"></script>

</body>
</html>

