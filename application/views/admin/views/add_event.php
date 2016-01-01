<section class="admin_section">
	<h1>ივენთის შექმნა</h1>
	<div  class="form_adding">

	<form action="<?php echo site_url('admin/check_event'); ?>" method="post">
	  <div class="form_val"><input type="text" name="event_name" placeholder="ივენთის სახელი">
	  <?php echo form_error('event_name'); ?></div>
	  <div class="event_start_date"><input type="text" name="event_start_date" placeholder="დაწყების დრო">
	  <?php echo form_error('event_start_date'); ?></div>
	  <div class="event_end_date"><input type="text" name="event_end_date" placeholder="დასრულების დრო">
	  <?php echo form_error('event_end_date'); ?></div>
	  <div class="form_val"><input type="text" name="event_location" placeholder="ლოკაცია">
	  <?php echo form_error('event_location'); ?></div>
	  <div class="form_val"><textarea rows="6" type="text" name="event_overview" placeholder="ივენთის შესახებ"></textarea>
	  <?php echo form_error('event_overview'); ?></div>
	  <div class="form_val"><input type="text" name="" placeholder="მენტორის არჩევა"></div>
	  <div class="form_val"><input type="text" name="" placeholder="ორგანიზატორები"></div>
	  <div class="form_val"><input type="text" name="" placeholder="სპონსორები"></div>
	  <div class="form_val"><input type="text" name="" placeholder="განრიგი"></div>
	  <div class="form_val"><input class="button" type="submit" value="ივენთის დამატება"></div>
	</form> 
	</div>

</section>