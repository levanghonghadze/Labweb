<section class="admin_section">
	<h1>სიახლის დამატება</h1>

	<div  class="form_adding">
	<form action="<?php echo site_url('admin/check_news'); ?>" method="post" enctype="multipart/form-data">
	  <!-- <div class="form_val"><input type="text" name="news_name" placeholder="სიახლის სათაური" value="<?php echo set_value('event_name'); ?>">
	  <?php echo form_error('event_name'); ?></div>

	  <div class="form_val"><textarea rows="6" type="text" name="agenda" placeholder="სიახლის მოკლე აღწერა"><?php echo set_value('agenda'); ?></textarea>
	  <?php echo form_error('agenda'); ?></div>
	  <div class="form_val"><textarea rows="10" type="text" name="agenda" placeholder="სიახლის ვრცელი აღწერა"><?php echo set_value('agenda'); ?></textarea>
	  <?php echo form_error('agenda'); ?></div> -->

	  <button type="button" class="btn-upload" onclick="document.getElementById('photo').click()"><i class="fa fa-cloud-upload"></i><span>ფოტოს ატვირთვა</span></button>
	  <input type="file" id="photo" name="photo" style="display:none;">
	  <div class="form_val"><input class="button" type="submit" value="სიახლის დამატება"></div>
	</form> 
	</div>

</section>