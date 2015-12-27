<style>
.wrapper {max-width: 100%;}
</style>

<?php foreach ( $mentors as $m ) : ?>
<a href="<?php echo site_url('main/show_mentors/' . $m['id']) ?>">	
<div class="mentors_form" style="background: url(<?php echo $m['photo'] ?>) no-repeat center center / cover;">
<h1><?php echo $m['name'] ?></h1>
<div class="mentors_info"><span><?php echo $m['info'] ?></span></div>
</div><!-- /mentors_form -->
</a>
<?php endforeach; ?>