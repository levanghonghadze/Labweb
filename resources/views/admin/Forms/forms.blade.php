@extends('admin')
@section('content')
<h1 class="sectionTitle">ფორმის შექმნა</h1>
  <link rel="stylesheet" href="{{ URL::asset('public/fbuilder/vendor/css/vendor.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('public/fbuilder/formbuilder.css') }}" />
    <style>

    input[type=text] {
      height: 26px;
      margin-bottom: 3px;
    }

    select {
      margin-bottom: 5px;
      font-size: 40px;
    }
    </style>
  <div class='fb-main'></div>
  <script src="{{ URL::asset('public/fbuilder/vendor/js/vendor.js') }}"></script>
  <script src="{{ URL::asset('public/fbuilder/formbuilder.js') }}"></script>
  <script>
    $(function(){
      fb = new Formbuilder({
        selector: '.fb-main',
        bootstrapData: [
          {
            "label": "სახელი",
            "field_type": "text",
            "required": true,
            "field_options": {},
            "cid": "c1"
          },
          {
            "label": "გვარი",
            "field_type": "text",
            "required": true,
            "field_options": {},
            "cid": "c2"
          },
          {
            "label": "ელ-ფოსტა",
            "field_type": "email",
            "required": true,
            "field_options": {},
            "cid": "c3"
          },
          {
            "label": "ტელეფონის ნომერი",
            "field_type": "number",
            "required": true,
            "field_options": {},
            "cid": "c4"
          }
        ]
      });

      fb.on('save', function(payload){
        $('.formData').append(payload);
      })
    });

  </script>

<div class="createform">
{{ Form::open(array('url' => 'Admin/Forms/store', 'files' => true)) }}
  {{ Form::textarea('formdata', null, array('class' => 'formData')) }}
  {{ Form::submit('ფორმის დამატება', array('class' => 'insertForm')) }}
{{ Form::close() }}
</div>
<script>
$('.createform form').submit(function( event ) {
    event.preventDefault();
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
          alert('error');
        }
    });
});
</script>
@endsection
