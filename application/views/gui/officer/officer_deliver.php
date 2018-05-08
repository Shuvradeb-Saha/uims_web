<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Approved Requisition</title>
    <?php
    if ($this->session->userdata('type') != 'officer') {
        header('Location: ' . base_url() . 'login');
    }
    include 'officer_header.php'; ?>
    <?php include 'officer_nav_menu.php'; ?>

</head>
<body>

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
            <th>Action</th>

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
                <td>
                    <form method="get" action="<?php echo base_url() ?>officer/requisitionDelivered">
                        <input type="submit" value="Delivered" class="btn btn-primary"
                               style="color: white;background-color: #5e9fc4;height: 40px;width: 100px">
                        <input type="hidden" name="r_id" value="<?php echo $req['r_id'] ?>">
                        <input type="hidden" name="quantity" value="<?php echo $req['quantity'] ?>">
                        <input type="hidden" name="p_id" value="<?php echo $req['p_id'] ?>">
                    </form>
                </td>
                <?php
                echo '</tr>';
            }
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

