<section class="admin_section">
	<h1>ჩემი ივენთები</h1>
	
<div class="admin_event_form" style="margin: 20px 0 0 0; border: radius: none; padding: 1% 2%;">
	<h2>ივენთის სახელი</h2>

<div class="admin_event_location"><i class="fa fa-map-marker"></i> მდებარეობა</div>
<div class="admin_event_date"><i class="fa fa-clock-o"></i> დაწყების დრო</div>
</div>
<?php foreach ( $events as $e ) : ?>
<div class="admin_event_form">
<a href="<?php echo site_url('main/show_event/' . $e['id']) ?>">
	<h2><?php echo $e['event_name'] ?></h2>
</a>

<div class="admin_event_location"><i class="fa fa-map-marker"></i> <?php echo $e['location'] ?></div>
<div class="admin_event_date"><i class="fa fa-clock-o"></i> <?php echo $e['event_start_date'] ?></div>

	 <div class="editors">
	 <a href="<?php echo site_url('admin/edit_events/' . $e['id']); ?>"><i class="fa fa-pencil-square-o"></i></a>
	 <a href="<?php echo site_url('admin/remove_events/' . $e['id']); ?>"><i class="fa fa-trash-o"></i></a>
	 </div>

</div><!-- /admin_event_form -->

<?php endforeach; ?>

</section>