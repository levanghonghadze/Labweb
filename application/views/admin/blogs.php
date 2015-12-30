<section class="adminsec">
<h1><span>BLOGS</span><a href="<?php echo site_url('admin/add_blogs'); ?>">ADD NEW BLOG</a></h1>

 <?php foreach ( $blogs as $b ) : ?>
 	
 	<div class="admin_lists">
 		<span><?php echo $b['id']; ?></span>
 		<span class="blogs_title"><a href="<?php echo site_url('blog/show'); ?>/<?php echo $b['id']; ?>" target="blank"><?php echo $b['title']; ?></a></span>
 		<span><?php echo $b['date']; ?></span>
 		
	 		<div class="admin_Control">
	 		<a href="<?php echo site_url('admin/remove_blog'); ?>/<?php echo $b['id']; ?>"><i class="fa fa-trash-o"></i></a>
	 		<a href="<?php echo site_url('admin/edit_blog'); ?>/<?php echo $b['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
	 		</div>
 	</div><!-- /admin_pages -->

<?php endforeach; ?>

</section>