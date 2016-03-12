$(document).ready(function() {
  $(".drop_ul").hide();

  $(".admin_nav li").click(function()
  {
    $(this).next(".drop_ul").slideToggle(200);
    $(this).siblings().next(".drop_ul").slideUp(200);
  });
});
