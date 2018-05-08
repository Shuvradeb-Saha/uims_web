
<!-- Pushy Menu -->
<nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content">
        <ul>
            <li class="pushy-link"><a href="<?php echo base_url(); ?>login/chairmanPage" style="text-decoration: none">Home</a></li>
            <li class="pushy-submenu">
                <button>Stock</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_category" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Category</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_product" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Product</a></li>
                </ul>
            </li>
            <li class="pushy-submenu">
                <button>Requisition</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_requisition_request" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">View Requisition Request</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_approved_request" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Approved Requisition</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_delivered_request" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Delivered Requisition</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_purchase" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Purchase Requisition</a></li>
                </ul>
            </li>


            <li class="pushy-submenu">
                <button>Report</button>
                <ul>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_todays_report " style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Todays</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_sevendays_report" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Last Seven days</a></li>
                    <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_in_date_range_report" style="text-decoration: none; padding: 10px; border-bottom: 1px white solid">Report in Date Range</a></li>
                </ul>
            </li>

            <li class="pushy-link"><a href="<?php echo base_url(); ?>login/chairmanPage"  style="text-decoration: none;">User Request</a></li>
            <li class="pushy-link"><a href="<?php echo base_url(); ?>chairman/view_user" style="text-decoration: none;">Users</a></li>

        </ul>
    </div>
</nav>
