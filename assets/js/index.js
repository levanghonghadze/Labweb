$(document).ready(function() {
  // Hides all paragraphs
  $(".drop_ul").hide();

  $(".admin_nav li").click(function()
  {
    // Toggles the paragraph under the header that is clicked. .slideToggle(200) can be changed to .slideDown(200) to make sure one paragraph is shown at all times.
    $(this).next(".drop_ul").slideToggle(200);
    // Makes other pararaphes that is not under the current clicked heading dissapear
    $(this).siblings().next(".drop_ul").slideUp(200);
  });
});

