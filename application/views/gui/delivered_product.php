
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Delivered Requisition</h1>
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
            <th>Delivery Date</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        if($requisition != null){
            foreach ($requisition as $req){
                echo '<tr>';
                echo '<td>'.$i++.'</td>';
                echo '<td>'.$req['name'].'</td>';
                echo '<td>'.$req['pr_name'].'</td>';
                echo '<td>'.$req['cat_name'].'</td>';
                echo '<td>'.$req['quantity'].'</td>';
                echo '<td>'.$req['send_date'].'</td>';
                echo '<td>'.$req['approve_date'].'</td>';
                echo '<td>'.$req['delivery_date'].'</td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>
