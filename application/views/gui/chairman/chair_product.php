<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>User/Stock/Product</title>
    <?php
    include 'chair_header.php';
    if( $this->session->userdata('type') != 'director'){
        header('Location: '.base_url().'login');
    }
    ?>
</head>
<body>

<?php include 'nav.php'?>
<!-- Pushy Menu -->
<?php include 'menu.php' ?>


<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Product</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Product Name</th>
            <th>Category name</th>

            <th>Lot Number</th>
            <th>Quantity</th>
            <th>Added By</th>
            <th>Added Date</th>
            <th>Last Update</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        if($prod_list != null){
            foreach ($prod_list as $product){
                if($product['last_update'] == null){
                    $product['last_update'] = $product['add_date'];
                }
                echo '<tr>';
                echo '<td>'.$i++.'</td>';
                echo '<td>'.$product['pr_name'].'</td>';
                echo '<td>'.$product['cat_name'].'</td>';
                echo '<td>'.$product['lot_number'].'</td>';
                echo '<td>'.$product['quantity'].'</td>';
                echo '<td>'.$product['m_email'].'</td>';
                echo '<td>'.$product['add_date'].'</td>';
                echo '<td>'.$product['last_update'].'</td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>

<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="<?php echo base_url();?>/assets/js/pushy.min.js"></script>

</body>
</html>
