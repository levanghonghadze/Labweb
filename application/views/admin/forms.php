<section class="admin_section">
	<h1>ჩემი ფორმები</h1>
	<?php foreach ( $forms as $f ) : ?>
		<div class="admin_forms">
		<h2><?php echo $f['form_name'] ?></h2>
		<div class="form_event"><?php echo $f['event_name'] ?></div>
	 <div class="editors">
	 <a href="<?php echo site_url('admin/remove_events/' . $f['id']); ?>"><i class="fa fa-trash-o"></i></a>
	 <a href="<?php echo site_url('admin/edit_events/' . $f['id']); ?>"><i class="fa fa-pencil-square-o"></i></a>
	 </div>
		</div>
	<?php endforeach; ?>

</section>