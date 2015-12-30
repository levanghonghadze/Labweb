<!DOCTYPE html>  
    <head>
          <meta charset="utf-8" />
		  <title>VICTORIA & YORK</title>
		  <meta name="Author" content="yourweb.ge">
        <?php 

        $this->load->helper('url');
        $this->config->base_url();

        ?>
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
		<link href='<?php echo base_url(); ?>theme/style/styles.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('theme/navigation/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('theme/style/responsive.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('theme/js/modernizr.js'); ?>"></script>
		<script type='text/javascript' src="<?php echo base_url('theme/js/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('theme/js/jquery.fancybox.pack.js?v=2.1.5'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('theme/js/jquery.superslides.min.js'); ?>"></script>
        <script src="<?php echo base_url('theme/js/jquery.royalslider.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('theme/js/main.js'); ?>"></script>
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    </head>
	
<body>

<div id="top">
	<header class="site-nav  strip">

			<a href=""><img src="<?php echo base_url(); ?>theme/images/logo.png" class="logo" alt=""/></a>
			<a href="#" id='drop'><i class="fa fa-bars"></i></a>

			<!-- Primary site Nav -->
			<nav>
				<ul class='clearfix'>
				<li><a href="<?php echo site_url('/main'); ?>">HOME PAGE</a></li>
				<li class="submenu">
					<a href="#">ABOUT US</a>
					<ul>
						<li><a href="<?php echo site_url('/main/page/about_our_company'); ?>">&#187; About Our Company</a></li>
						<li><a href="<?php echo site_url('/main/page/working_with_us'); ?>">&#187; Working With Us</a></li>
						<li><a href="<?php echo site_url('/main/team'); ?>">&#187; Our Team</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#">SERVICES</a>
					<ul>
						<li><a href="<?php echo site_url('/main/page/leasing'); ?>">&#187; Leasing</a></li>
						<li><a href="<?php echo site_url('/main/page/property_management'); ?>">&#187; Property Management</a></li>
						<li><a href="<?php echo site_url('/main/page/consulting'); ?>">&#187; Consulting</a></li>
					</ul>
				</li>
				<li><a href="<?php echo site_url('/blog'); ?>">BLOG</a></li>
				<li><a href="<?php echo site_url('/contact'); ?>">CONTACT</a></li>
				</ul>
			</nav>
			<script src="<?php echo base_url(); ?>theme/navigation/index.js"></script>
</div><!--top-->
		
	</header>
	<!--header-->