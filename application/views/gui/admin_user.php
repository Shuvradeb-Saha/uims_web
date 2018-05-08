<?php ob_start(); ?>
<?php require 'header.php';?>

    <body>

<?php if ($this->session->userdata('type') == 'admin'){ ?>
    <!-- container section start -->
<section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="#" class="logo">INVENTORY MANAGEMENT SYSTEM </a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search user" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>
        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="icon-user"></span>
                        <span class="username"><?php echo $this->session->userdata('name'); ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> MY PROFILE</a>
                        </li>
                        <li class="eborder-top">
                            <a href="<?php echo base_url() ?>/user/logout"><i class="icon_key_alt"></i> LOG OUT</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="#">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo base_url(); ?>login/adminPage" class="">
                        <i class="icon_desktop"></i>
                        <span>Home</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>

                </li>
                <li>
                    <a href="<?php echo base_url(); ?>admin/getUsers">
                        <i class="icon_piechart"></i>
                        <span>Users</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo base_url() ?>user/adminPage">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-15 col-md-15">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Approved User List</strong></h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive"><?php if ($approved != null){ ?>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Designation</th>
                                        <th>University</th>
                                        <th>Department</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $i = 0 ?>
                                    <?php foreach ($approved as $request): ?>
                                        <tr>
                                            <td><?php echo ++$i ?></td>
                                            <td><?php echo $request['name'] ?></td>
                                            <td><?php echo $request['email'] ?></td>
                                            <td><?php echo $request['designation'] ?></td>
                                            <td><?php echo $request['university'] ?></td>
                                            <td><?php echo $request['department'] ?></td>
                                            <td><?php echo $request['gender'] ?></td>
                                            <td>
                                                <form method="post"
                                                      action="<?php echo base_url(); ?>admin/removeUser">

                                                    <input type="submit" name="action" value="Delete" id="btn"
                                                           class="btn btn-danger"/>
                                                    <input type="hidden" name="email"
                                                           value="<?php echo $request['email']; ?>"/>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <?php } else { ?>
                                        <?php
                                        echo '<h1> No Request Available </h1>';
                                    } ?>
                                    </tbody>
                                </table>


                            </div>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Removed User List</strong></h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive"><?php if ($removed != null){ ?>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Designation</th>
                                        <th>University</th>
                                        <th>Department</th>
                                        <th>Gender</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $i = 0 ?>
                                    <?php foreach ($removed as $request): ?>
                                        <tr>
                                            <td><?php echo ++$i ?></td>
                                            <td><?php echo $request['name'] ?></td>
                                            <td><?php echo $request['email'] ?></td>
                                            <td><?php echo $request['designation'] ?></td>
                                            <td><?php echo $request['university'] ?></td>
                                            <td><?php echo $request['department'] ?></td>
                                            <td><?php echo $request['gender'] ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                    <?php } else { ?>
                                        <?php
                                        echo '<h1> No Request Available </h1>';
                                    } ?>
                                    </tbody>
                                </table>


                            </div>

                        </div>
                    </div>

                </div>
            </div>

                    <!--/col-->
        </section>
        <!--main content end-->
    </section>
<?php } else {
    header('Location: ' . base_url() . 'login');
} ?>
<?php require 'footer.php'; ?>