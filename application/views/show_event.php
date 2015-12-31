<div class="show_event">
<div class="event_img" style="background: url(<?php echo $events['photo'] ?>) no-repeat center center / cover;">
	<h1><?php echo $events['name'] ?></h1>
</div>

<div class="event_overview">
<?php echo $events['overview'] ?>
</div>

<div class="event_location"><i class="fa fa-map-marker"></i> <?php echo $events['location'] ?></div>
<div class="event_date"><i class="fa fa-clock-o"></i> <?php echo $events['date'] ?></div>

<button>რეგისტრაცია</button>
</div><!-- /show_event -->