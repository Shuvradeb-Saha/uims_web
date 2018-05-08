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







