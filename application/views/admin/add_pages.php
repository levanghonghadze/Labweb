<section class="adminsec">
<h1><span>ADD NEW PAGE</span></h1>


<form action="<?php echo site_url('admin/insert_page'); ?>" method="POST" enctype="multipart/form-data" class="add_forms">
  <input type="text" name="page_title" placeholder="Page Name">
  <input type="text" name="page_url" placeholder="Page Url (http://www.vicyork.com/about_us)">
  <textarea name="page_text" placeholder="Page Text"></textarea>
  <input type="submit" class="buttons" value="ADD PAGE">
</form> 


</section>