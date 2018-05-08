<?php ob_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Category</title>
    <?php include 'chair_header.php'?>

    <?php
    include 'nav.php';
    include 'menu.php';
    /*include APPPATH.'views/gui/req_3_table.php';*/

    if( $this->session->userdata('type') != 'director')
    {
        header('Location: '.base_url().'login');
    }
    ?>

</head>
<body>

<!-- Site Overlay -->
<div class="site-overlay"></div>





<!-- Your Content -->
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn" style="position: absolute;">&#9776; Menu</button>

    <div align="center">
        <form method="get" action="<?php echo base_url();?>chairman/getDataInDateRange">
            <span style="font-size: 20px">Enter Date Range</span>&nbsp;&nbsp;: &nbsp;&nbsp;
            <input  name= "from" type="text" id="requisitionFrom" placeholder="From" style="padding: 10px"> &nbsp;&nbsp;
            <input name="to" type="text" id="requisitionTo" placeholder="To" style="padding: 10px">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" class="btn btn-info btn-lg" value="Show">
        </form>
    </div>

    <?php
        if($_REQUEST){
            ?>

            <div style='border: #0c5460'>
            echo '<p>'.'Showing result'.$_REQUEST['from']. 'to'.$_REQUEST['to'].'</p>'
           
            echo '</div>';
<?php
        }
    ?>

    <div style="margin: 80px 5px 20px;border: 1px solid #2181a1;background-color: #5e7bc5">
        <h3 style=" text-align: center; color: #fcffff; margin-top: 2px"> Forwarded For Approval</h3>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Sender</th>
                <th>Product</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Sent Date</th>
                <th>Forward Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
                if($forward != null)
                {
                    foreach ($forward as $req)
                    {
                        echo '<tr>';
                        echo '<td>'.$i++.'</td>';
                        echo '<td>'.$req['name'].'</td>';
                        echo '<td>'.$req['pr_name'].'</td>';
                        echo '<td>'.$req['cat_name'].'</td>';
                        echo '<td>'.$req['quantity'].'</td>';
                        echo '<td>'.$req['send_date'].'</td>';
                        echo '<td>'.$req['forward_date'].'</td>';
                        echo '</tr>';
                    }
                }
            ?>
            </tbody>
        </table>

    </div>

    <div style="margin: 80px 5px 20px;border: 1px solid #2181a1;background-color: #9747a1">
        <h3 style=" text-align: center; color: #fcffff; margin-top: 2px"> Approved But Not Delivered</h3>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Sender</th>
                <th>Product</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Sent Date</th>
                <th>Forward Date</th>
                <th>Approve Date</th>
            </tr>
            </thead>
            </thead>
            <tbody>
            <?php
            $i = 1;
            if($approved != null)
            {
                foreach ($approved as $req)
                {
                    echo '<tr>';
                    echo '<td>'.$i++.'</td>';
                    echo '<td>'.$req['name'].'</td>';
                    echo '<td>'.$req['pr_name'].'</td>';
                    echo '<td>'.$req['cat_name'].'</td>';
                    echo '<td>'.$req['quantity'].'</td>';
                    echo '<td>'.$req['send_date'].'</td>';
                    echo '<td>'.$req['forward_date'].'</td>';
                    echo '<td>'.$req['approve_date'].'</td>';
                    echo '</tr>';
                }
            }
            ?>
            </tbody>
        </table>

    </div>

    <div style="margin: 80px 5px 20px;border: 1px solid #2181a1;background-color: #7a1b28">
        <h3 style=" text-align: center; color: #fcffff; margin-top: 2px"> Delivered</h3>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Sender</th>
                <th>Product</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Sent Date</th>
                <th>Forward Date</th>
                <th>Approve Date</th>
                <th>Deliver Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            if($delivered != null)
            {
                foreach ($delivered as $req)
                {
                    echo '<tr>';
                    echo '<td>'.$i++.'</td>';
                    echo '<td>'.$req['name'].'</td>';
                    echo '<td>'.$req['pr_name'].'</td>';
                    echo '<td>'.$req['cat_name'].'</td>';
                    echo '<td>'.$req['quantity'].'</td>';
                    echo '<td>'.$req['send_date'].'</td>';
                    echo '<td>'.$req['forward_date'].'</td>';
                    echo '<td>'.$req['approve_date'].'</td>';
                    echo '<td>'.$req['delivery_date'].'</td>';
                    echo '</tr>';
                }
            }
            ?>
            </tbody>
        </table>

    </div>






</div>



<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="<?php echo base_url();?>/assets/js/pushy.min.js"></script>
<script>
    $( function() {
        $( "#requisitionFrom" ).datepicker();
    } );
    $( function() {
        $( "#requisitionTo" ).datepicker();
    } );

</script>
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js">
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
