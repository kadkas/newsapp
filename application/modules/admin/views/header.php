<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/linearicons/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.dataTables.min.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/demo.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>img/favicon.png">


    <title><?php echo base_url();?></title>
  </head>
  <body>
   
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="<?php echo base_url();?>img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>
                </form>
        
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Basic Use</a></li>
                                <li><a href="#">Working With Data</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Troubleshooting</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url();?>img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                                <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="<?php echo base_url();?>index.php/admin/posts/index" class="active"><i class="lnr lnr-home"></i> <span>Posts</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/world"><i class="lnr lnr-home"></i> <span>Top Headlines-World</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/india" class=""><i class="lnr lnr-code"></i> <span>Top Headlines-India</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/tvmovies" class=""><i class="lnr lnr-chart-bars"></i> <span>TV/Movies</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/lifestyle" class=""><i class="lnr lnr-cog"></i> <span>Lifestyle</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/finance" class=""><i class="lnr lnr-alarm"></i> <span>Finance</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/health" class=""><i class="lnr lnr-dice"></i> <span>Health</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/education" class=""><i class="lnr lnr-text-format"></i> <span>Education</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/environment" class=""><i class="lnr lnr-text-format"></i> <span>Environment</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/technology" class=""><i class="lnr lnr-text-format"></i> <span>Technology</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/fashion" class=""><i class="lnr lnr-text-format"></i> <span>Fashion</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/science" class=""><i class="lnr lnr-text-format"></i> <span>Science</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/finance" class=""><i class="lnr lnr-text-format"></i> <span>Finance</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/food" class=""><i class="lnr lnr-text-format"></i> <span>Food</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/recipes" class=""><i class="lnr lnr-text-format"></i> <span>Recipes</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/pfinance" class=""><i class="lnr lnr-text-format"></i> <span>Personal Finance</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/travel" class=""><i class="lnr lnr-text-format"></i> <span>Travel</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/loveandsex" class=""><i class="lnr lnr-text-format"></i> <span>Love & Sex</span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/mainc/index/sports" class=""><i class="lnr lnr-text-format"></i> <span>Sport</span></a></li>
                        <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR --> 

            <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">


        