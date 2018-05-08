<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Users</title>
    <?php include 'chair_header.php';
    if( $this->session->userdata('type') != 'director'){
        header('Location: '.base_url().'login');
    }
    ?>
</head>
<body>
<?php include('nav.php'); ?>
<!-- Pushy Menu -->
<?php include('menu.php');?>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->

<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Purchase Requisition</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Category</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Shaishab Saha</td>
            <td>bsse0815@iit.du.ac.bd</td>
            <td>Computer Accessories</td>
            <td>CPU</td>
            <td>1</td>
            <td>03-04-18</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Suravi Akhter</td>
            <td>bsse0815@iit.du.ac.bd</td>
            <td>Stationary</td>
            <td>Pen</td>
            <td>5</td>
            <td>04-04-18</td>
        </tr>
        </tbody>
    </table>
</div>


<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="<?php echo base_url(); ?>/assets/js/pushy.min.js"></script>

</body>
</html>

