<section class="admin_section">
	<h1>ივენთის შექმნა</h1>
	<div  class="form_adding">

	<form action="<?php echo site_url('admin/check_event'); ?>" method="post" enctype="multipart/form-data">
	  <div class="form_val"><input type="text" name="event_name" placeholder="ივენთის სახელი" value="<?php echo set_value('event_name'); ?>">
	  <?php echo form_error('event_name'); ?></div>
	  <div class="event_start_date"><input type="text" name="event_start_date" placeholder="დაწყების დრო" value="<?php echo set_value('event_start_date'); ?>">
	  <?php echo form_error('event_start_date'); ?></div>
	  <div class="event_end_date"><input type="text" name="event_end_date" placeholder="დასრულების დრო" value="<?php echo set_value('event_end_date'); ?>">
	  <?php echo form_error('event_end_date'); ?></div>
	  <div class="form_val"><input type="text" name="event_location" placeholder="ლოკაცია" value="<?php echo set_value('event_location'); ?>">
	  <?php echo form_error('event_location'); ?></div>
	  <div class="form_val"><textarea rows="6" type="text" name="event_overview" placeholder="ივენთის შესახებ"><?php echo set_value('event_overview'); ?></textarea>
	  <?php echo form_error('event_overview'); ?></div>
	  <div class="form_val">
	  <select name="forms">
	  	<option value="">აირჩიეთ ფორმა</option>
		<?php foreach ( $forms as $f ) : ?>
	  		<option value="<?php echo $f['id'] ?>"><?php echo $f['form_name'] ?></option>
		<?php endforeach; ?>
	  </select>
	  <?php echo form_error('forms'); ?></div>
	  <!--/select-->
	  <div class="form_val">
	  <select name="labs">
	  	<option value="">აირჩიეთ ლაბი</option>
		<?php foreach ( $labs as $l ) : ?>
	  		<option value="<?php echo $l['id'] ?>"><?php echo $l['lab_name'] ?></option>
		<?php endforeach; ?>
	  </select>
	  <?php echo form_error('labs'); ?></div>
	  <!--/select-->

					  <div class="form_val">
					  <input id="hidenIds" type="hidden" name="ment_ids[]"></input>
					  <select id="mentorSelect" name="labs" value="აირჩიეთ მენტორი">
					  	<option selected disabled value="">აირჩიეთ მენტორი</option>
						<?php foreach ( $mentors as $m ) : ?>
					  		<option value="<?php echo $m['id'] ?>"><?php echo $m['mentor_name'] ?></option>
						<?php endforeach; ?>
					  </select>
					  <?php echo form_error('mentors'); ?></div>

	  <div class="form_val"><textarea rows="6" type="text" name="agenda" placeholder="მაგ: 
11:45-12:00
მონაწილეთა რეგისტრაცია"><?php echo set_value('agenda'); ?></textarea>
	  <?php echo form_error('agenda'); ?></div>

	  <button type="button" class="btn-upload" onclick="document.getElementById('photo').click()"><i class="fa fa-cloud-upload"></i><span>ფოტოს ატვირთვა</span></button>
	  <input type="file" id="photo" name="photo" style="display:none;">
	  <!-- <div class="form_val"><input type="text" name="" placeholder="მენტორის არჩევა"></div>
	  <div class="form_val"><input type="text" name="" placeholder="ორგანიზატორები"></div>
	  <div class="form_val"><input type="text" name="" placeholder="სპონსორები"></div>
	  <div class="form_val"><input type="text" name="" placeholder="განრიგი"></div> -->
	  <div class="form_val"><input class="button" type="submit" value="ივენთის დამატება"></div>
	</form> 
	</div>

</section>