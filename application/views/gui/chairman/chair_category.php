<?php ob_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Category</title>
    <?php include 'chair_header.php'?>

    <?php
    include 'nav.php';
    include 'menu.php';;

    if( $this->session->userdata('type') != 'director'){
        header('Location: '.base_url().'login');
    }/*
    elseif($this->session->userdata('type') == 'faculty' || $this->session->userdata('type') == 'staff'  ){
        include ('../general_user_nav_menu.php');
    }elseif ($this->session->userdata('type') == 'officer'){
        echo '<h1>'.'hello officer'.'</h1>';
    }*/


    ?>

</head>
<body>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Category</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Category name</th>
            <th>Added By</th>
            <th>Added Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        if($cat_list != null){
            foreach ($cat_list as $category){
                echo '<tr>';
                echo '<td>'.$i++.'</td>';
                echo '<td>'.$category['cat_name'].'</td>';
                echo '<td>'.$category['m_email'].'</td>';
                echo '<td>'.$category['add_date'].'</td>';

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
