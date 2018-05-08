<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Users</title>
    <?php
    if( $this->session->userdata('type') != 'staff' && $this->session->userdata('type') != 'faculty'){
        header('Location: '.base_url().'login');
    }
    include 'general_user_header.php';
    include 'general_user_nav_menu.php';
    ?>
    <!-- jQuery -->

</head>
<body>


<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Users</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Designation</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        if($users != null){
            foreach ($users as $user){
                echo '<tr>';
                echo '<td>'.$i++.'</td>';
                echo '<td>'.$user['name'].'</td>';
                echo '<td>'.$user['email'].'</td>';
                echo '<td>'.$user['designation'].'</td>';
                echo '</tr>';

            }
        }
        ?>
        </tbody>

    </table>

</div>

<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="../assets/js/pushy.min.js"></script>

</body>
</html>
