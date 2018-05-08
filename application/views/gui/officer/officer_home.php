<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home</title>
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
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> User Request</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Designation</th>
            <th>University</th>
            <th>Department</th>
            <th>Gender</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        <?php $i = 0 ?>
        <?php foreach ($req as $request): ?>
        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $request['name'] ?></td>
            <td><?php echo $request['email'] ?></td>
            <td><?php echo $request['designation'] ?></td>
            <td><?php echo $request['university'] ?></td>
            <td><?php echo $request['department'] ?></td>
            <td><?php echo $request['gender'] ?></td>
            <td><?php echo $request['reg_send_date'] ?></td>
            <td>
                <form method="post"
                      action="<?php echo base_url(); ?>/officer/authenticate">
                    <input type="submit" name="action" value="Approve" id="btn"
                           class="btn btn-success"/>
                    <input type="submit" name="action" value="Cancel" id="btn"
                           class="btn btn-danger"/>
                    <input type="hidden" name="email"
                           value="<?php echo $request['email']; ?>"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>

        </tbody>

    </table>

</div>


<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="../assets/js/pushy.min.js"></script>

</body>
</html>

