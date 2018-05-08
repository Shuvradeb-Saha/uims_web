<?php ob_start(); ?>
<?php require 'header.php'; ?>
<body>
<!-- container section start -->
<section id="container" >
    <header class="header dark-bg ">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="chairman.html" class="logo">INVENTORY MANAGEMENT SYSTEM</a>
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
                <!-- alert notification start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span>
                                <span class="label label-primary"><i class="icon_profile"></i></span>

                            </span>
                        <span class="req_num">10</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> 10 User Request</a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span>
                                <span class="label label-primary"><i class="icon_bag"></i></span>

                            </span>
                        <span class="req_num">11</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>

                        <li class="eborder-top">
                            <a href="#"><i class="icon_bag_alt"></i>Requisition Request</a>
                        </li>
                    </ul>
                </li>
                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span>
                                <span class="label label-primary"><i class="icon_profile"></i></span>

                            </span>
                        <span class="username">User name</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> MY PROFILE</a>
                        </li>
                        <li class="eborder-top">
                            <a href="login.html"><i class="icon_key_alt"></i> LOG OUT</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li >
                    <a class="" href="#">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_tool"></i>
                        <span>Stock</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="category.html">Category</a></li>
                        <li><a class="" href="product.html">Product</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="#">
                        <i class="icon_piechart"></i>
                        <span>Report</span>
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
                        <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="count">7.538</div>
                    <div class="title"><a href="#" style="color: white">Requisition</a></div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-thumbs-o-up"></i>
                    <div class="count">4.362</div>
                    <div class="title">Used product</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fa fa-cubes"></i>
                    <div class="count">1.426</div>
                    <div class="title">Stock</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            </div>
            <!--/.row-->
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                            <div class="panel-actions">
                                <a href="chairman.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                                <a href="chairman.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="chairman.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Country</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Designation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="img/bangladesh.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>Bangladesh</td>
                                    <td>Suravi</td>
                                    <td>bsse0827@iit.du.ac.bd</td>
                                    <td>Maintenance Officer</td>
                                </tr>
                                <tr>
                                    <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>India</td>
                                    <td>Ahaishab</td>
                                    <td>bsse0815@iit.du.ac.bd</td>
                                    <td> Faculty</td>
                                </tr>
                                <tr>
                                    <td><img src="img/bangladesh.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>Bangladesh</td>
                                    <td>Shammy</td>
                                    <td>bsse0821@iit.du.ac.bd</td>
                                    <td>Staff</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!--/col-->
        </section>
        <!--main content end-->
    </section>
    <!-- container section start -->

<?php require 'footer.php'; ?>