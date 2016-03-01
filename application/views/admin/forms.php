<section class="admin_section">
	<h1>ჩემი ფორმები</h1>
	<?php foreach ( $forms as $f ) : ?>
		<div class="edit_forms">
		<div class="formsi"><i class="fa fa-list-alt"></i></div>
		
		<h2><?php echo $f['form_name'] ?></h2>
<!-- 		<div class="form_event"><?php echo $f['event_name'] ?></div>
 -->	 
	 <a href="<?php echo site_url('admin/remove_forms/' . $f['id']); ?>"><i class="mdel fa fa-trash-o"></i></a>
	 <a href="<?php echo site_url('admin/edit_forms/' . $f['id']); ?>"><i class="mupd fa fa-pencil-square-o"></i></a>
		</div>
	<?php endforeach; ?>

</section>ы