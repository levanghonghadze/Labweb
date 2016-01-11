<section class="admin_section">
	<h1>მენტორის დამატება</h1>
	<div  class="form_adding">

	<form action="<?php echo site_url('admin/update_mentors/' . $mentors['id']); ?>" method="post">
	  <div class="form_val"><input type="text" name="mentor_name" placeholder="სახელი, გვარი" value="<?php echo $mentors['mentors_name'] ?>">
	  <?php echo form_error('mentor_name'); ?></div>
	  <div class="form_val"><input type="text" name="mentor_info" placeholder="ინფორმაცია" value="<?php echo $mentors['info']; ?>">
	  <?php echo form_error('mentor_info'); ?></div>
	  <button type="button" class="btn-upload" onclick="document.getElementById('photo').click()"><i class="fa fa-cloud-upload"></i><span>ფოტოს ატვირთვა</span></button>
	  <input type="file" id="photo" name="photo" style="display:none;">
	  <div class="form_val"><input class="button" type="submit" value="მენტორის დამატება"></div>
	</form> 
	</div>

</section>

