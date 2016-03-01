<style>
.wrapper { max-width: 100%; margin: 0 2%; height: 100%;}
</style>

<div class="pages view_blog">


<div class="blog_img" style="background: url(<?php echo base_url('uploads') . '/' . $show_blog['photo'] ?>) no-repeat center center / cover;"></div>
<h2><?php echo $show_blog['title'] ?><br/><span><?php echo $show_blog['date'] ?></span></h2>
<div class="blog_text"><?php echo nl2br($show_blog['text']); ?></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php echo base_url('main/show_blog') . '/' . $show_blog['id'] ?>" data-width="100%" data-numposts="10"></div>


</div>