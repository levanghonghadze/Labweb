<section class="adminsec">
<h1><span>PAGES</span><a href="<?php echo site_url('admin/add_pages'); ?>">ADD NEW PAGE</a></h1>

 <?php foreach ( $pages as $p ) : ?>
 	
 	<div class="admin_lists">
 		<span><?php echo $p['id']; ?></span>
 		<span><a href="<?php echo site_url('main/page'); ?>/<?php echo $p['page_url']; ?>" target="blank"><?php echo $p['page_title']; ?></a></span>
 		
	 		<div class="admin_Control">
	 		<a href=""><i class="fa fa-trash-o"></i></a>
	 		<a href=""><i class="fa fa-pencil-square-o"></i></a>
	 		</div>

 	</div><!-- /admin_pages -->

<?php endforeach; ?>

</section>