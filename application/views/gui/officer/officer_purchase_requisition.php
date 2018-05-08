<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Purchase Requisition</title>
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

<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Send Requisition</h1>
    <form id="requisition">
        <select name="category" style="width: 250px; padding: 10px; margin: 10px">
            <option>Select Category</option>
            <option value="computerAccessories" >Computer Accessories</option>
            <option value="electronics">Electronics</option>
            <option value="stationary">Stationary</option>
        </select>
        <select name="product" style="width: 250px; padding: 10px; margin: 10px">
            <option>Select Product</option>
            <option value="cpu" >CPU</option>
            <option value="fan">Fan</option>
            <option value="pen">Pen</option>
        </select>
        <br>
        <input type="number" name="quantity" min="0" placeholder="Enter quantity" style="width: 250px; padding: 10px; margin: 10px" required> <br>
        <input type="submit" value="Send"  class="btn btn-success" style="width: 250px; padding: 10px; margin: 10px"><br>
        <input type="submit" value="Cancel"  class="btn btn-danger" style="width: 250px; padding: 10px; margin: 10px">
    </form>
</div>
<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="../assets/js/pushy.min.js"></script>

</body>
</html>

