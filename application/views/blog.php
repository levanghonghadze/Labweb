<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="vyblog">
 <?php foreach ( $blogs as $post ) : ?>
   <div class="blog_post">
      <h1><?php echo $post['title'] ?><span><?php echo $post['date']; $timestamp ?></span></h1>
      <div class="blogimg">
         <div class="blog_image" style="background: url(<?php echo $post['image'] ?>) no-repeat center center / cover;"></div>
      </div>
      <h2><?php echo $post['stext'] ?></h2>
      <a class="blog_read" href="<?php echo ('blog/show/' . $post['id']) ?>">READ MORE...</a>
   </div>
   <!--blog_post-->
<?php endforeach; ?>
</div>
<!--page-->