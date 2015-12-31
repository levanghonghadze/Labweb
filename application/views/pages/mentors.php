<style>
.wrapper {max-width: 100%;}
</style>

<?php foreach ( $mentors as $m ) : ?>
<div class="mentors_form" style="background: url(<?php echo $m['photo'] ?>) no-repeat center center / cover;">
<h1><?php echo $m['name'] ?></h1>
<div class="mentors_info"><span><?php echo $m['info'] ?></span></div>
</div><!-- /mentors_form -->
<?php endforeach; ?>