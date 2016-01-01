<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>  
    <head>
          <meta charset="utf-8" />
		  <title>Labweb</title>
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/index.js'); ?>"></script>
		<link href='<?php echo base_url('assets/style/admin.css'); ?>' rel='stylesheet' type='text/css'>
    </head>
	
<body>

<div class="top">
	<div class="admin_logo"><a href=""><strong>Labweb</strong>dashboard</a></div>
</div>

<div class="admin">

<div class="admin_left">

<div class="user_panel">
	<div class="user_photo" style="background: url(https://bobwptrainer-wpengine.netdna-ssl.com/wp-content/uploads/2013/04/user-profile.jpg) no-repeat center center / cover"></div>
	<div class="user_name">Levan</div>
	<div class="lab_name">Geolab</div>
</div>

	<ul class="admin_nav">
		<li class="check_link"><a class="nav" href="#">ივენთები</a></li>
			<ul class="drop_ul">
				<li><a href="<?php echo site_url('admin/add_event'); ?>">ივენთის შექმნა</a></li>
				<li><a href="">ივენთების მართვა</a></li>
			</ul>
	  <li class="check_link"><a class="nav" href="#">ფორმები</a></li>
			<ul class="drop_ul">
				<li><a href="">ფორმის შექმნა</a></li>
				<li><a href="">ფორმების მართვა</a></li>
			</ul>
	  <li class="check_link"><a class="nav" href="#">მენტორები</a></li>
			<ul class="drop_ul">
				<li><a href="">მენტორის დამატება</a></li>
				<li><a href="">მენტორების მართვა</a></li>
			</ul>
	  <li class="check_link"><a class="nav" href="#">ბლოგი</a></li>
			<ul class="drop_ul">
				<li><a href="">ბლოგის დამატება</a></li>
				<li><a href="">ბლოგების მართვა</a></li>
			</ul>
	</ul>

<script>
$('.check_link a').click(function(e) {
    e.preventDefault(); //prevent the link from being followed
    $('.check_link a').removeClass('selected');
    $(this).addClass('selected');
});
</script>

</div>