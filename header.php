<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
                Charisma v1.0.0

                Copyright 2012 Muhammad Usman
                Licensed under the Apache License v2.0
                http://www.apache.org/licenses/LICENSE-2.0

                http://usman.it
                http://twitter.com/halalit_usman
        -->
        <meta charset="utf-8">
        <title>HiProjects Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->
        <link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/charisma-app.css" rel="stylesheet">
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='css/fullcalendar.css' rel='stylesheet'>
        <link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='css/chosen.css' rel='stylesheet'>
        <link href='css/uniform.default.css' rel='stylesheet'>
        <link href='css/colorbox.css' rel='stylesheet'>
        <link href='css/jquery.cleditor.css' rel='stylesheet'>
        <link href='css/jquery.noty.css' rel='stylesheet'>
        <link href='css/noty_theme_default.css' rel='stylesheet'>
        <link href='css/elfinder.min.css' rel='stylesheet'>
        <link href='css/elfinder.theme.css' rel='stylesheet'>
        <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='css/opa-icons.css' rel='stylesheet'>
        <link href='css/uploadify.css' rel='stylesheet'>


        <!-- Bootstrap core CSS -->


        <!--external css-->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <!--<link rel="shortcut icon" href="img/favicon.ico">-->

    </head>

    <body>
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
            <!-- topbar starts -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="index.php"> <!--<img alt="HiProjects Logo" src="img/logo20.png" />--> <span>HiProjects</span></a>

                        <!-- theme selector starts -->
                        <!--	<div class="btn-group pull-right theme-container" >
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
                                                <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" id="themes">
                                                <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
                                                <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                                                <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                                                <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                                                <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                                                <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                                                <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                                                <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                                                <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                                        </ul>
                                </div>-->
                        <!-- theme selector ends -->

                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone"> admin</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="admin_logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->

                        <div class="top-nav nav-collapse">
                            <ul class="nav">
                                <!--<li><a href="#">Visit Site</a></li>
                                <li>
                                        <form class="navbar-search pull-left">
                                                <input placeholder="Search" class="search-query span2" name="query" type="text">
                                        </form>
                                </li>-->
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- topbar ends -->
        <?php } ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

                    <!-- left menu starts -->
                    <div class="span2 main-menu-span"> 
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <li class="nav-header hidden-tablet">Main</li>
                                <li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                                <li class="nav-header hidden-tablet">PRODUCTS CATALOG</li>
                                <li><a class="ajax-link" href="category_list.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Categories</span></a></li>
                                <li><a class="ajax-link" href="view_products.php"><i class="icon-edit"></i><span class="hidden-tablet"> Products</span></a></li>
                                <!--<li><a class="ajax-link" href="#"><i class=" icon-list-alt"></i><span class="hidden-tablet"> Similar Products</span></a></li>
                                <li><a class="ajax-link" href="#"><i class=" icon-list-alt"></i><span class="hidden-tablet"> Combo offers</span></a></li>-->
                                <li><a class="ajax-link" href="home_page_products.php"><i class=" icon-list-alt"></i><span class="hidden-tablet"> Home Page Products</span></a></li>
                                <li><a class="ajax-link" href="view_review.php"><i class=" icon-list-alt"></i><span class="hidden-tablet"> Reviews</span></a></li>
                                <li class="nav-header hidden-tablet">OTHER SECTION</li>
                                <li><a class="ajax-link" href="service_centers.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Service Center</span></a></li>
                                <li><a class="ajax-link" href="view_faq.php"><i class="icon-bullhorn"></i><span class="hidden-tablet"> FAQ</span></a></li>

                                <li><a class="ajax-link" href="view_testimonial.php"><i class=" icon-list-alt"></i><span class="hidden-tablet"> Testimonials</span></a></li>

                                <li class="nav-header hidden-tablet">USER SECTION</li>
                                <li><a class="ajax-link" href="view_registrants.php"><i class="icon-user"></i><span class="hidden-tablet"> Registrants</span></a></li>
                                <li><a class="ajax-link" href="view_clients.php"><i class="icon-user"></i><span class="hidden-tablet"> Clients</span></a></li>
                                <li><a class="ajax-link" href="subscribers_list.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Subscribers</span></a></li>
                                <li><a class="ajax-link" href="report.php"><i class="icon-check"></i><span class="hidden-tablet"> Report </span></a></li>
                                <li><a class="ajax-link" href="label_printing.php"><i class="icon-check"></i><span class="hidden-tablet"> Label Printing </span></a></li>

                                <li class="nav-header hidden-tablet">SALES MANAGEMENT</li>
                                <li><a class="ajax-link" href="pending_orders.php"><i class="icon-user"></i><span class="hidden-tablet">Pending Orders</span></a></li>
                                <li><a class="ajax-link" href="billing_payments.php"><i class="icon-user"></i><span class="hidden-tablet"> Billing</span></a></li>
                                <li><a class="ajax-link" href="logistics.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Logistics</span></a></li>
                                <li><a class="ajax-link" href="order_status.php"><i class="icon-check"></i><span class="hidden-tablet"> Order Status</span></a></li>



                                <li class="nav-header hidden-tablet">CUSTOMER RELATIONS</li>
                                <li><a class="ajax-link" href="news_letter.php"><i class="icon-user"></i><span class="hidden-tablet"> NewsLetters </span></a></li>
                                <li><a class="ajax-link" href="view_complaints.php"><i class="icon-comment"></i><span class="hidden-tablet"> Complaints</span></a></li>
                                <li><a class="ajax-link" href="view_feedback.php"><i class="icon-bullhorn"></i> Feedback </span></a></li>
                                <li><a class="ajax-link" href="view_question.php"><i class="icon-bullhorn"></i> Question  </span></a></li>
                                <li><a class="ajax-link" href="contact_us.php"><i class="icon-bullhorn"></i> Contact us  </span></a></li>
                                <!--<li><a class="ajax-link" href="ui.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
                                <li><a class="ajax-link" href="form.php"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                                <li><a class="ajax-link" href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                                <li><a class="ajax-link" href="typography.php"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                                <li><a class="ajax-link" href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                                <li class="nav-header hidden-tablet">Sample Section</li>
                                <li><a class="ajax-link" href="table.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                                <li><a class="ajax-link" href="calendar.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                                <li><a class="ajax-link" href="grid.php"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
                                <li><a class="ajax-link" href="file-manager.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                                <li><a href="tour.php"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>-->
                                <li><a class="ajax-link" href="icon.php"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                                <!--<li><a class="ajax-link" href="view_reminders.php"><i class="icon-time"></i><span class="hidden-tablet"> Reminders</span></a></li>
                                <li><a href="error.php"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>-->
                                <li><a href="login.php"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                                <li><a href="change_password.php"><i class=" icon-wrench"></i><span class="hidden-tablet"> Change Password</span></a></li>
                            </ul>
                            <!--<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>-->
                        </div><!--/.well -->
                    </div><!--/span-->
                    <!-- left menu ends -->

                    <noscript>
                    <div class="alert alert-block span10">
                        <h4 class="alert-heading">Warning!</h4>
                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    </div>
                    </noscript>

                    <div id="content" class="span10">
                        <!-- content starts -->
                    <?php } ?>
