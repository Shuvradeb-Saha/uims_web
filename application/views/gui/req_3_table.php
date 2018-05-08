
<!-- Your Content -->
<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn" style="position: absolute;">&#9776; Menu</button>

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
