<section class="main_events">
	<div class="sec_title">ივენთები</div>
	<?php foreach ( $events as $e ) : ?>
	<div class="event_form">
	<a href="<?php echo site_url('main/show_event/' . $e['id']) ?>">
	<div class="event_img" style="background: url(<?php echo base_url('uploads/' . $e['photo']) ?>) no-repeat center center / cover, rgba(255,255,255,0.5);">
	<div class="event_info" style="height: 20vh;">
		<h1><?php echo $e['name'] ?></h1>
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

<section class="main_news">
	<div class="sec_title">სიახლეები
		<a href=""><i class="fa fa-external-link"></i> ყველა სიახლე</a>
	</div>
	

			<div class="news_form">
			<a href="">ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს</a>
			<br/><span>11 იანვარი 2015</span>
			</div><!-- /news_form -->
			<div class="news_form">
			<a href="">ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს</a>
			<br/><span>11 იანვარი 2015</span>
			</div><!-- /news_form -->
			<div class="news_form">
			<a href="">ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს</a>
			<br/><span>11 იანვარი 2015</span>
			</div><!-- /news_form -->

</section>

<section class="main_mentors">
	<div class="sec_title">მენტორები</div>
</section>

<section class="main_labs">
	<div class="sec_title">ლაბები</div>
</section>