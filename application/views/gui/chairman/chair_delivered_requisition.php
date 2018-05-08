<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Approved Requisition</title>
    <?php
    include 'chair_header.php';
    if ($this->session->userdata('type') != 'director') {
        header('Location: ' . base_url() . 'login');
    }
    include 'nav.php';
    include 'menu.php';
    include APPPATH.'views/gui/delivered_product.php';

    ?>

</head>
<body>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="<?php echo base_url(); ?>/assets/js/pushy.min.js"></script>

</body>
</html>
