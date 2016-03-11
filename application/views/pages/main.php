<section class="main_events">
	<div class="sec_title"><?php echo $this->lang->line('events'); ?></div>
	<?php foreach ( $events as $e ) : ?>
	<div class="event_form main_event_form">
	<a href="<?php echo site_url('main/show_event/' . $e['id']) ?>">
	<div class="event_img" style="background: url(<?php echo base_url('uploads/' . $e['photo']) ?>) no-repeat center center / cover, rgba(255,255,255,0.5);">
	<div class="event_info" style="height: 20vh;">
		<h1><?php echo $e['event_name'] ?></h1>
		<div class="get_event">
		GET EVENT
		</div>
		</div>
	</div>
	</a>

	<div class="event_location"><i class="fa fa-map-marker"></i> <?php echo $e['location'] ?></div>
	<div class="event_date"><i class="fa fa-clock-o"></i> <?php echo $e['event_start_date'] ?></div>

	</div><!-- /event_form -->

	<?php endforeach; ?>
</section>

<section class="main_mentors">
	<div class="sec_title">
	<?php echo $this->lang->line('speakers'); ?>
		<a href="<?php echo site_url('speakers'); ?>"><i class="fa fa-external-link"></i> <?php echo $this->lang->line('all') . ' ' . $this->lang->line('speaker'); ?></a>
	</div>

	<?php foreach ( $mentors as $m ) : ?>
		<div class="mentors_form main_mentors_form" style="background: url(<?php echo base_url('uploads/' . $m['photo']) ?>) no-repeat center center / cover;">
		<h1><?php echo $m['mentor_name'] ?></h1>
		<div class="mentors_info"><span><?php echo $m['info'] ?></span></div>
		</div><!-- /mentors_form -->
	<?php endforeach; ?>

</section>

<section class="main_news">
	<div class="sec_title">
	<?php echo $this->lang->line('newss'); ?>
		<a href="<?php echo site_url('news'); ?>"><i class="fa fa-external-link"></i> <?php echo $this->lang->line('all') . ' ' . $this->lang->line('news'); ?></a>
	</div>
	
<?php foreach ( $blogs as $b ) : ?>
		<div class="news_form">
			<a href="<?php echo site_url('main/show_news') . '/' . $b['id'] ?>"><?php echo $b['title'] ?></a>
			<br/><span><?php echo $b['date'] ?></span>
		</div><!-- /news_form -->
<?php endforeach; ?>

</section>