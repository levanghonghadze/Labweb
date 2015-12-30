<section class="adminsec">
<h1><span>ADD NEW BLOG</span></h1>



<form action="<?php echo site_url('admin/insert_blog'); ?>" method="POST" enctype="multipart/form-data" class="add_forms">
  <input type="text" name="title" placeholder="Blog Title">
  <textarea name="stext" placeholder="Short Description"></textarea>
  <textarea name="ftext" placeholder="Full Description"></textarea>
  <input type="file" name="img">
  <input type="submit" class="buttons" value="ADD BLOG">
</form> 


</section>