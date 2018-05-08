<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>User/Home</title>
    <?php
    if( $this->session->userdata('type') != 'staff' && $this->session->userdata('type') != 'faculty'){
        header('Location: '.base_url().'login');
    }
    include 'general_user_header.php';?>
    <?php include 'general_user_nav_menu.php';?>

</head>
<body>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Ordered Requisition</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Product Name</th>
            <th>Category name</th>
            <th>Send Date</th>
            <th>Approved Date</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>CPU</td>
            <td>Computer Accessories</td>
            <td>23-02-18</td>
            <td>25-02-18</td>
            <td>20</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Fan</td>
            <td>Electronics</td>
            <td>23-02-18</td>
            <td>25-02-18</td>
            <td>18</td>
        </tr>
        <tr>
            <td>3</td>
            <td>CPU</td>
            <td>Computer Accessories</td>
            <td>23-02-18</td>
            <td>25-02-18</td>
            <td>20</td>
        </tr>
        </tbody>

    </table>

</div>

<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="../assets/js/pushy.min.js"></script>

</body>
</html>



