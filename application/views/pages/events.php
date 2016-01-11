<style>
.wrapper {max-width: 100%;}
</style>

<?php foreach ( $events as $e ) : ?>
<div class="event_form">
<a href="<?php echo site_url('main/show_event/' . $e['id']) ?>">
<div class="event_img" style="background: url(<?php echo base_url('uploads/' . $e['photo']) ?>) no-repeat center center / cover, rgba(255,255,255,0.5);">
<div class="event_info" style="height: 20vh;">
	<h1><?php echo $e['name'] ?></h1>
	<div class="get_event">
	GET EVENT
	</div>
	</div>
</div>
</a>

<div class="event_location"><i class="fa fa-map-marker"></i> <?php echo $e['location'] ?></div>
<div class="event_date"><i class="fa fa-clock-o"></i> <?php echo $e['event_start_date'] ?></div>

</div><!-- /event_form -->

<?php endforeach; ?>