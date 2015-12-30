<section class="adminsec">
<h1><span>ADD NEW BLOG</span></h1>



<form action="<?php echo site_url('admin/update_blog'); ?>/<?php echo $edit_blog['id'] ?>" method="POST" enctype="multipart/form-data" class="add_forms">
  <input type="text" name="title" value="<?php echo $edit_blog['title'] ?>">
  <textarea name="stext" ><?php echo $edit_blog['stext'] ?></textarea>
  <textarea name="ftext" ><?php echo $edit_blog['ftext'] ?></textarea>
  <input type="file" name="img">
  <input type="submit" class="buttons" value="ADD BLOG">
</form> 


</section>