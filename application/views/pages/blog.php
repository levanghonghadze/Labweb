<?php foreach ( $blogs as $b ) : ?>
<div class="blog_form">
<h1><?php echo $b['title'] ?></h1>
	<?php echo $b['date'] ?>
	<div class="blog_img" style="background: url(<?php echo $b['photo'] ?>) no-repeat center center / cover;">a</div>
	<?php echo $b['text'] ?>
</div><!-- /blog_form -->
<?php endforeach; ?>