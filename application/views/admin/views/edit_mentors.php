<section class="admin_section">
	<h1>მენტორის რედაქტირება</h1>
	<div  class="form_adding">

	<form action="<?php echo site_url('admin/update_mentors/' . $mentors['id']); ?>" method="post" enctype="multipart/form-data">
	  <div class="form_val"><input type="text" name="mentor_name" placeholder="სახელი, გვარი" value="<?php echo $mentors['mentor_name'] ?>">
	  <?php echo form_error('mentor_name'); ?></div>
	  <div class="form_val"><input type="text" name="mentor_info" placeholder="ინფორმაცია" value="<?php echo $mentors['info']; ?>">
	  <?php echo form_error('mentor_info'); ?></div>
	  <button type="button" class="btn-upload" onclick="document.getElementById('photo').click()"><i class="fa fa-cloud-upload"></i><span>ფოტოს ატვირთვა</span></button>
	  <input type="file" id="photo" name="photo" style="display: none;">
	  <!-- <input id="photoname" type="text" value="<?php echo $mentors['photo']; ?>" name="photo"/> -->
	  <div class="form_val"><input class="button" type="submit" value="მენტორის დამატება"></div>
	</form> 
	</div>

</section>

// <script type="text/javascript">
	
// document.getElementById('photo').onchange = uploadOnChange;
    
// function uploadOnChange() {
//     var filename = this.value;
//     var lastIndex = filename.lastIndexOf("\\");
//     if (lastIndex >= 0) {
//         filename = filename.substring(lastIndex + 1);
//     }
//     document.getElementById('photoname').value = filename;
// }

// </script>
