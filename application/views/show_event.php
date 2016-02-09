<style>
.wrapper { max-width: 1300px; }
</style>
  <script src="<?php echo base_url('assets/js/vendor.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/pp.js'); ?>"></script>


<div class="show_event">
<div class="event_img" style="background: url(<?php echo base_url('uploads/' . $show_events['photo']) ?>) no-repeat center center / cover, rgba(255,255,255,0.5);">
	<h1><?php echo $show_events['event_name'] ?></h1>
</div>

<div class="event_overview">
<?php echo $show_events['overview'] ?>
</div>
	
	<div id="openModal" class="modalDialog">
	    <div>	
			<h2>
			<span><?php echo $show_events['event_name'] ?></span>
	    	<a href="#close" title="Close" class="close"><i class="fa fa-times"></i></a>
	    	</h2>

			<div class="popup_registration_form">
			  	<div class='fb-main'></div>

				  <script>
				    $(function(){
				      fb = new Formbuilder({
				        selector: '.fb-main',
				        bootstrapData: [
				          
<?php echo $show_events['form'] ?>
				        ]
				      });
				      fb.on('save', function(payload){
				        console.log(payload);
				      })
				    });
				  </script>
			</div><!-- /popup_registration_form -->
	    </div>
	</div><!-- /modalDialog -->

<div class="register_event">
<button class="register_event_button" onclick="window.location.href='#openModal'">ივენთზე რეგისტრაცია</button>
<div class="event_location"><i class="fa fa-map-marker"></i> <?php echo $show_events['location'] ?></div>
<div class="event_date"><i class="fa fa-clock-o"></i> <?php echo $show_events['event_start_date'] ?></div>
</div><!-- /register_event -->

<section class="show_event_mentors">
<h2>მენტორები</h2>
  <?php foreach ( $se_mentors as $m ) : ?>
  <div class="show_event_mentors_form">
    <div class="mentors_info"><span><?php echo $m['mentor_name']; ?></span></div>
    <div class="show_event_mentors_img" style="background: url(<?php echo base_url('uploads/' . $m['photo']); ?>) no-repeat center center / cover;"></div>
  </div>
  <?php endforeach; ?>
</section>

<!-- <div class="lab_info">
<?php echo $events['lab_name'] ?>
<?php echo $events['lab_photo'] ?>
</div> -->


</div><!-- /show_event -->



