<?php foreach ( $blogs as $b ) : ?>
<div class="blog_form">
<div class="blog_img" style="background: url(<?php echo base_url('uploads') . '/' . $b['photo'] ?>) no-repeat center center / cover;"></div>
<h1><?php echo $b['title'] ?><br/><span><?php echo $b['date'] ?></span></h1>
<div class="blog_text"><?php echo $b['short_text'] ?></div>
<a href="<?php echo base_url('main/show_news') . '/' . $b['id']; ?>" class="readmore"><?php echo $this->lang->line('readmore'); ?></a>
</div><!-- /blog_form -->
<?php endforeach; ?>