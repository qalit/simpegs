<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title> Dashboard SIMPEG</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- Load Bootstrap CSS -->
	<link href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo site_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo site_url(); ?>assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo site_url(); ?>assets/css/style_responsive.css" rel="stylesheet" />
	<link href="<?php echo site_url(); ?>assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="<?php echo site_url(); ?>assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/uniform/css/uniform.default.css" />
	<link href="<?php echo site_url(); ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo site_url(); ?>assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<!-- Mulai body -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
				    <img src="img/logo.png" alt="Admin Lab" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
					<ul class="nav top-menu">
                        <!-- BEGIN SETTINGS -->
                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
                                <i class="icon-cog"></i>
                            </a>
                        </li>
                        <!-- END SETTINGS -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
						<!-- BEGIN NOTIFICATION DROPDOWN -->
						<li class="dropdown" id="header_notification_bar">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

							<i class="icon-bell-alt"></i>
							<span class="badge badge-warning">7</span>
							</a>
							<ul class="dropdown-menu extended notification">
								<li>
									<p>You have 7 new notifications</p>
								</li>
								<li>
									<a href="#">
									<span class="label label-important"><i class="icon-bolt"></i></span>
									Server #3 overloaded.
									<span class="small italic">34 mins</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-warning"><i class="icon-bell"></i></span>
									Server #10 not respoding.
									<span class="small italic">1 Hours</span>
									</a>
								</li>
                                <li>
                                    <a href="#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success"><i class="icon-plus"></i></span>
                                        New user registered.
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
								<li>
									<a href="#">
									<span class="label label-info"><i class="icon-bullhorn"></i></span>
									Application error.
									<span class="small italic">10 mins</span>
									</a>
								</li>
								<li>
									<a href="#">See all notifications</a>
								</li>
							</ul>
						</li>
						<!-- END NOTIFICATION DROPDOWN -->

					</ul>
                </div>
                    <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                        <!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar1_small.jpg" alt="">
                                <span class="username">Al Qalit</span>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
								<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
								<li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
								<li class="divider"></li>
								<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="sidebar-menu">
				<li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                       <!-- sub menu dashboard -->
                    </ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> Data Pegawai
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
					<li><a class="" href="#">Dosen</a></li>
					<li><a class="" href="#">Pegawai</a></li>
					<li><a class="" href="#">Bapel</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<span class="icon-box"><i class="icon-cogs"></i></span> Laporan
					<span class="arrow"></span>
					</a>
					<ul class="sub">
                        <li><a class="" href="#">Laporan Harian</a></li>
                        <li><a class="" href="#">Laporan Mingguan</a></li>
                        <li><a class="" href="#">Laporan Bulanan</a></li>
                    </ul>
				</li>
				<li><a class="" href="login.html"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN THEME CUSTOMIZER-->
						<div id="theme-change" class="hidden-phone">
							<i class="icon-cogs"></i>
							<span class="settings">
                                <span class="text">Theme:</span>
                                <span class="colors">
                                    <span class="color-default" data-style="default"></span>
                                    <span class="color-gray" data-style="gray"></span>
                                    <span class="color-purple" data-style="purple"></span>
                                    <span class="color-navy-blue" data-style="navy-blue"></span>
                                </span>
							</span>
						</div>
						<!-- END THEME CUSTOMIZER-->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Dashboard
							<small> General Information </small>
						</h3>
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
                            <li>
                                <a href="#">Admin Lab</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Dashboard</a><span class="divider-last">&nbsp;</span></li>
                            <li class="pull-right search-wrap">
                                <form class="hidden-phone">
                                    <div class="search-input-area">
                                        <input id=" " class="search-query" type="text" placeholder="Search">
                                        <i class="icon-search"></i>
                                    </div>
                                </form>
                            </li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
			</div>
		</div>
	</div>