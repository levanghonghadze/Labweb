<section class="admin_section">
	<h1>მენტორები</h1>
	<?php foreach ( $mentors as $m ) : ?>
	<div class="edit_mentors">
		<h2><?php echo $m['name']; ?></h2>
		<div class="edit_mentors_img" style="background: url(<?php echo $m['photo'] ?>) no-repeat center center / cover;"></div>
	 		<a href="<?php echo site_url('admin/remove_mentors/' . $m['id']); ?>"><i class="fa fa-trash-o"></i></a>
	 		<a href="<?php echo site_url('admin/edit_mentors/' . $m['id']); ?>"><i class="fa fa-pencil-square-o"></i></a>
	</div>
	<?php endforeach; ?>
</section>