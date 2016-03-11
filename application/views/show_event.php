<style>
.wrapper { margin: 2% 2% 0 2%; }
</style>

<div class="shov_event_leftbar">
<h1><?php echo $this->lang->line('agenda'); ?></h1>
<div class="agenda">
	<p><?php echo nl2br($show_events['agenda']) ?></p>
</div>
<h1><?php echo $this->lang->line('organisers'); ?></h1>
<img src="<?php echo base_url('uploads/' . $show_events['lab_photo']) ?>" alt="" />
<h1><?php echo $this->lang->line('news') . ' ' . $this->lang->line('toevent'); ?></h1>
  <?php foreach ( $se_news as $n ) : ?>
  	<a href="<?php echo $n['id']; ?>" class="se_news"><?php echo $n['title']; ?></a>
  <?php endforeach; ?>
</div>

<div class="show_event">
<div class="event_img" style="background: url(<?php echo base_url('uploads/' . $show_events['photo']) ?>) no-repeat center center / cover, rgba(255,255,255,0.5);">
	<h1><?php echo $show_events['event_name'] ?></h1>
</div>

<div class="register_event">
<button class="register_event_button" onclick="window.location.href='#openModal'"><?php echo $this->lang->line('toevent') . ' ' . $this->lang->line('registration'); ?></button>
<div class="event_location"><i class="fa fa-map-marker"></i> <?php echo $show_events['location'] ?></div>
<div class="event_date"><i class="fa fa-clock-o"></i> <?php echo $show_events['event_start_date'] ?></div>
</div><!-- /register_event -->

<div class="event_overview">
<?php echo nl2br($show_events['overview']) ?>
</div>
	
	<div id="openModal" class="modalDialog">
	    <div>	
			<h2>
			<span><?php echo $show_events['event_name'] ?></span>
	    	<a href="#close" title="Close" class="close"><i class="fa fa-times"></i></a>
	    	</h2>

			<div class="popup_registration_form">
			  	<form class="get_event_form" action="<?php echo site_url('main/get_event'); ?>" method="post">
			  		<?php echo $show_events['form'] ?>
            		<button class="register_event_button" style="margin-right: 0;" type="submit"><?php echo $this->lang->line('registration'); ?></button>
			  	</form>
			</div><!-- /popup_registration_form -->
	    </div>
	</div><!-- /modalDialog -->

<section class="show_event_mentors">
<h2><?php echo $this->lang->line('speakers'); ?></h2>
  <?php foreach ( $se_mentors as $m ) : ?>
  <div class="show_event_mentors_form">
    <div class="mentors_info"><span><?php echo $m['mentor_name']; ?></span></div>
    <div class="show_event_mentors_img" style="background: url(<?php echo base_url('uploads/' . $m['photo']); ?>) no-repeat center center / cover;"></div>
  </div>
  <?php endforeach; ?>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php echo base_url('main/show_blog') . '/' . $show_events['id'] ?>" data-width="100%" data-numposts="10"></div>
</section>
</div><!-- /show_event -->


<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/form/form-builder.min.css'); ?>">
