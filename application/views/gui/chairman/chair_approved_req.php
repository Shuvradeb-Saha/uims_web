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
    ?>

</head>
<body>

<?php include 'nav.php' ?>
<!-- Pushy Menu -->
<?php include 'menu.php' ?>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->

<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Approved Requisition</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Sender</th>
            <th>Product</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Sent Date</th>
            <th>Approve Date</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        if ($requisition != null) {
            foreach ($requisition as $req) {
                echo '<tr>';
                echo '<td>' . $i++ . '</td>';
                echo '<td>' . $req['name'] . '</td>';
                echo '<td>' . $req['pr_name'] . '</td>';
                echo '<td>' . $req['cat_name'] . '</td>';
                echo '<td>' . $req['quantity'] . '</td>';
                echo '<td>' . $req['send_date'] . '</td>';
                echo '<td>' . $req['approve_date'] . '</td>';
                ?>
                <?php
                echo '</tr>';
            }
        } else {

        }
        ?>
        </tbody>

    </table>
</div>


<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="<?php echo base_url(); ?>/assets/js/pushy.min.js"></script>

</body>
</html>

