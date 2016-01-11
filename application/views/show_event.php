<div class="show_event">
<div class="event_img" style="background: url(<?php echo base_url('uploads/' . $events['photo']) ?>) no-repeat center center / cover;">
	<h1><?php echo $events['name'] ?></h1>
</div>

<div class="event_overview">
<?php echo $events['overview'] ?>
</div>

<form action="<?php echo site_url('main/get_event') ?>" method="post" enctype="multipart/form-data">
<?php echo $events['form'] ?>
<input type="hidden" name="event_id" value="<?php echo $events['id'] ?>">
<input type="submit" value="Submit">
</form> 

<div class="lab_info">
<?php echo $events['lab_name'] ?>
<?php echo $events['lab_photo'] ?>
</div>

<?php echo $events['mentors_name'] ?>

<div class="event_location"><i class="fa fa-map-marker"></i> <?php echo $events['location'] ?></div>
<div class="event_date"><i class="fa fa-clock-o"></i> <?php echo $events['event_start_date'] ?></div>

<button>რეგისტრაცია</button>
</div><!-- /show_event -->