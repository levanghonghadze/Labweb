<?php foreach ( $blogs as $b ) : ?>
<div class="blog_form">
<a href="" class="readmore">READ MORE</a>
<div class="blog_img" style="background: url(<?php echo $b['photo'] ?>) no-repeat center center / cover;"></div>
<h1><?php echo $b['title'] ?><br/><span><?php echo $b['date'] ?></span></h1>
<div class="blog_text"><?php echo $b['text'] ?></div>
</div><!-- /blog_form -->
<?php endforeach; ?>