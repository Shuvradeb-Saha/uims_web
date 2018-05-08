<header class="site-header push" style="text-align: center;font-size: 18px;">INVENTORY MANAGEMENT SYSTEM
    <span style="margin-left: 900px">
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $this->session->userdata('name'); ?><span class="caret"></span>
            </button>
            <ul class="dropdown-menu" style="border-bottom: 1px black solid;color: white">
                <li  style="border-bottom: 1px black solid;"><a href="profile.html"><span class="glyphicon glyphicon-user"> </span>&nbsp;My Profile</a></li>
                <li style="border-bottom: 1px black solid;"><a href="<?php echo base_url();?>user/logout"><span class="glyphicon glyphicon-off"> </span>&nbsp;Logout</a></li>
            </ul>
        </div>
    </span>
</header>
<nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content">
        <ul>
            <li class="pushy-link"><a href="<?php echo base_url();?>login/generalUserPage" style="text-decoration: none">Home</a></li>
            <li class="pushy-submenu">
                <button>Stock</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>generalUser/view_category" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Category</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>generalUser/view_product" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Product</a></li>
                </ul>
            </li>
            <li class="pushy-submenu">
                <button>Requisition</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>generalUser/send_requisition" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Send Requisition</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url();?>login/generalUserPage" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Ordered Requisition</a></li>
                </ul>
            </li>

            <li class="pushy-link"><a href="<?php echo base_url(); ?>generalUser/view_faculty" style="text-decoration: none">Users</a></li>
        </ul>
    </div>
</nav>

