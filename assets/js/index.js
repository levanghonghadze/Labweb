$(document).ready(function() {
  $(".drop_ul").hide();

  $(".admin_nav li").click(function()
  {
    $(this).next(".drop_ul").slideToggle(200);
    $(this).siblings().next(".drop_ul").slideUp(200);
  });

var selectHandler = function(){
	$this = $(this.options[this.selectedIndex]);
	if($this.attr("value")=="")return false;
	var id = $this.val();
	var defId = $this.index();
	var text = $this.text();
	var ApendEl = $('<div class="selected-mentor"></div>');
	var _html = '<span>'+ text + '</span><div class="remove-selected-mentor">X</div>';
	var fullElement = ApendEl.append(_html);
	$(this).before(fullElement);
	$("#mentorSelect option").eq(defId).remove();

	$('.remove-selected-mentor').on('click', function(){
		 $(this).parent().remove();
	});
};

// mentors append
$('#mentorSelect').on('change', selectHandler);
// mentors append
});


