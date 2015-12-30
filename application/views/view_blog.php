<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="vyblog">
   <div class="blog_post">
      <h1><?php echo $view_blog['title'] ?></h1>
      <div class="blogimg">
         <div class="blog_image" style="background: url(<?php echo $view_blog['image'] ?>) no-repeat center center / cover;"></div>
      </div>
      <h2><?php echo $view_blog['ftext'] ?></h2>
   </div>
   <!--blog_post-->
</div>
<!--page-->