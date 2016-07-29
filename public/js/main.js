// register modal component
Vue.component('modal', {
  template: '#modal-template',
  props: {
    show: {
      type: Boolean,
      required: true,
      twoWay: true
    }
  }
})

// start app
new Vue({
  el: '#app',
  data: {
    showModal: false
  }
})


// var ckEditorID;
// ckEditorID = 'ckeExample';
//
// function fnConsolePrint() {
//     console.log(CKEDITOR.instances[ckEditorID].getData());
// }
// CKEDITOR.config.forcePasteAsPlainText = true;
// CKEDITOR.replace(ckEditorID, {
//     toolbar: [{
//         items: [
//           'Bold',
//           'Italic',
//           'Underline',
//           'Strike',
//           '-',
//           'RemoveFormat'
//         ]}, {
//         items: [
//           'Link',
//           'Unlink'
//         ] }, {
//         items: [
//           'Indent',
//           'Outdent',
//           '-',
//           'BulletedList',
//           'NumberedList'
//         ]}, {
//         items: [
//           'Undo',
//           'Redo'
//         ]
//     }]
// });

$('.delete').click(function(e){
  e.preventDefault();
  href = $(this).attr('href');
  token = $(this).data('token');
  $.ajax({
        url: href,
        type: 'post',
        data: {_method: 'delete', _token: token},
        success: function (result)
        {
        }
    });
});

$('.multipleList').on('click', 'li',function(){
  var id = $(this).remove().data('id');
  $('.multipleList').hide();
  $('.input').val('');
  $('.selectedList').append('<div class="list"><input type="text" name="multiselect[]" value="'+$(this).text()+'">'+$(this).text()+'<span data-id="'+id+'"></span></div>');
});

$(".multipleList li").click(function(){
  var id = $(this).remove().data('id');
  $('.multipleList').hide();
  $('.input').val('');
  $('.selectedList').append('<div class="list"><input type="text" name="multiselect[]" value="'+$(this).text()+'">'+$(this).text()+'<span data-id="'+id+'"></span></div>');
});

$('.selectedList').on("click","span",function(){
  id=$(this).data("id");
  $('.multipleList').append('<li data-id="'+id+'">'+$(this).parents(".list").text()+'</li>');
  $(this).parents(".list").remove();
});

$(".input").keyup(function () {
  $('.multipleList').show();
    val = $(this).val();
    $(".multipleList li").map(function (index, value) {
      $(value).toggle($(value).text().toLowerCase().indexOf(val) >= 0);
    });
});

$('.addForms form').submit(function( event ) {
    event.preventDefault();
    for (instance in CKEDITOR.instances) {
           CKEDITOR.instances[instance].updateElement();
    }
    $.ajax({
        url: $(this).attr('action'),
        type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            dataType: 'json',
        success: function( _response ){
            alert('success');
        },
        error: function(data){
          errors = JSON.parse(data.responseText);
          $.each(errors, function(key, value) {
            var element = $('.' + key);
            element.closest('.formGroup')
                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                .find('.formError')
                .remove();
            element.after('<div class="formError">'+value+'</div>');
          });
        }
    });
});

$('.adminItem h1 i[data-id]').click(function(){
  id = $(this).data('id')
  // $('.itemSett').hide();
  $('.itemSett[data-id='+id+']').toggle();
});
