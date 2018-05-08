<header class="site-header push" style="text-align: center;font-size: 20px;">
    <span style="float: left;margin-left: 20px">INVENTORY MANAGEMENT SYSTEM</span>

    <span style="float: right;margin-right: 20px">
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <?php echo $this->session->userdata('name'); ?><span class="caret"></span>
            </button>
            <ul class="dropdown-menu" style="border-bottom: 1px black solid; color: white">
                <li style="border-bottom: 1px black solid;"><a href="profile.html"><span
                                class="glyphicon glyphicon-user"> </span>&nbsp;My Profile</a></li>
                <li style="border-bottom: 1px black solid;"><a href="<?php echo base_url(); ?>user/logout"><span
                                class="glyphicon glyphicon-off"> </span>&nbsp;Logout</a></li>
            </ul>
        </div>
    </span>

    <!--<span style="float: right; margin-right: 20px;font-size: 15px;height: 40px;">
        <a href="<?Php /*echo base_url(); */?>officer/getUserCount" class="notif">
            <span class="num">0</span>
        </a>
    </span>

    <span style="float: right; margin-right: 20px;font-size: 15px;">
        <a href="" class="user">
            <span class="numusr" style="color: white;background-color: #cc1e20;padding-left: 4px;padding-right: 4px">2</span>
        </a>
    </span>
-->
</header>

<!-- Pushy Menu -->
<nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content">
        <ul>
            <li class="pushy-link"><a href="<?php echo base_url(); ?>login/officerPage" style="text-decoration: none">Home</a>
            </li>
            <li class="pushy-submenu">
                <button>Stock</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/category"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Category</a>
                    </li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/product"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Product</a>
                    </li>
                </ul>
            </li>
            <li class="pushy-submenu">
                <button>Requisition</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/forwardRequisition"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Forward
                            Requisition</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/purchaseRequisition"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Purchase
                            Requisition</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/viewApprovedRequisition"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Approved
                            Requisition</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/viewDeliveredRequisition"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Delivered
                            Requisition</a></li>

                </ul>
            </li>

            <li class="pushy-submenu">
                <button>Add to Stock</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/addCategory"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Add
                            Category</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/addProduct"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Add
                            Product</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/updateProduct"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Update
                            Product</a></li>
                </ul>
            </li>

            <li class="pushy-submenu">
                <button>Remove from Stock</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/removeCategory"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Remove
                            Category</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/removeProduct"
                                              style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Remove
                            Product</a></li>
                </ul>
            </li>

            <li class="pushy-link"><a href="<?php echo base_url(); ?>login/officerPage" style="text-decoration: none;">User
                    Request</a></li>
            <li class="pushy-link"><a href="<?php echo base_url(); ?>officer/viewUser" style="text-decoration: none;">Users</a>
            </li>
            <li class="pushy-link"><a href="#" style="text-decoration: none;">Report</a></li>
        </ul>
    </div>
</nav>
