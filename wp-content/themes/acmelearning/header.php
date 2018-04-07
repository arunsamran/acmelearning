<!DOCTYPE html>
<html style="margin-top:0px !important;">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
<!-- Page Title Here -->
<title><?php bloginfo('title'); ?></title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/custom.css">
<link class="skin"  rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/skin/skin-3.css">
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/templete.css">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/revolution/css/settings.css">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/revolution/css/navigation.css">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"> 
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body id="bg" class="acmeclass">
<div class="page-wraper"><div id="loading-area"></div>
	<!-- header -->
	<header class="site-header header  header-style-4 dark">
		<!-- top bar -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="rdx-topbar-left">
						<ul class="social-line text-center pull-right">
							<!-- <li><a href="contact-us"><i class="fa fa-map-marker"></i>  </a></li> -->
						</ul>
					</div>            

					<div class="rdx-topbar-right">
						 <ul class="social-line text-center pull-right">
							<li>&nbsp;</li>
							<li>&nbsp;</li>
							<li>&nbsp;</li>
							<li>&nbsp;</li>
						</ul> 
					</div>
				</div>
			</div>
		</div>
		<!-- top bar END-->
		<div class="main-bar">
			<div class="container header-contant-block">
				<div class="row">
					<div class="col-md-2">
						<div class="logo-header "><a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" width="193" height="89" alt=""></a></div>
					</div>
					<div class="col-md-6">
					<span class='section-head  text-white'><h1 style='padding-top:35px;font-size:23px !important;font-weight: 600 !important;'>Widening Your Knowledge</h1></span>
					</div>
					
					<div class="col-md-4">
						<ul class="social-line text-center pull-right">
							<li><a target="_blank" href="https://www.facebook.com/ACME-Learning-2112227632125891/" class="fa fa-facebook"></a></li>
							<li><a target="_blank" href="https://twitter.com/acme_learning" class="fa fa-twitter"></a></li>
							<li><a target="_blank" href="https://www.instagram.com/acmelearning/" class="fa fa-instagram"></a></li>
							<li><a target="_blank" href="https://plus.google.com/u/0/111022261421186555692" class="fa fa-google-plus"></a></li>
						</ul> 
					</div>
					
				</div>
			</div>
		</div>	
		<!-- main header -->
		<div class="sticky-header main-bar-wraper">
			<div class="main-bar clearfix ">
				<div class="slide-up">
					<div class="container clearfix bg-primary">
					
						<!-- website logo -->
						<div class="logo-header mostion">
						<?php //bloginfo('name'); ?>
						<?php //bloginfo('description'); ?>
						<a href="index.html"><span class='section-head  text-white'><h1 style='padding-top:15px;font-size:40px !important;font-weight: 800 !important;'>ACME</h1></span><img src="<?php bloginfo('template_url'); ?>/images/logo-white1.png" width="193" height="89" alt=""></a></div>
						
						<!-- nav toggle button -->
						<button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<!-- extra nav -->
					
						
						<!-- main nav -->
				<div class="header-nav navbar-collapse collapse">
					
					<!-- main nav -->
					<?php wp_nav_menu(array('items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>')); ?>
					
				</div>
		
					</div>
				</div>	
			</div>
		</div>
		<!-- main header END -->
	</header>
	<!-- header END -->
    <!-- Content -->
    <div class="page-content">
	