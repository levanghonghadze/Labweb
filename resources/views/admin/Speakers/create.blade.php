@extends('admin')
@section('content')
<h1 class="sectionTitle">სპიკერის დამატება</h1>
<div class="addForms">
  {{ Form::open(array('url' => 'Admin/Speakers/store', 'files' => true)) }}
    <div class="right">
    <div class="formGroup">
    {{ Form::submit('ივენთის დამატება', array('class' => 'button rightButton')) }}
    </div>
    <div class="formGroup">
        {{ Form::file('photo', array('id' => 'browseFile')) }}
    </div>
      <div class="upload">
        <div class="browse" onclick="document.getElementById('browseFile').click()"></div>
      </div>
    </div>
  <div class="formGroup">
    {{ Form::label('სახელი') }}
    {{ Form::text('title', null, array('class' => 'name','placeholder'=>'სახელი')) }}
  </div>
  <div class="formGroup">
    {{ Form::label('გვარი') }}
    {{ Form::text('location', null, array('class' => 'location','placeholder'=>'გვარი')) }}
  </div>
  <div class="formGroup">
    {{ Form::label('აღწერა') }}
    {{ Form::textarea('description', null, array('id' => 'ckeExample')) }}
    <div class="description"></div>
  </div>
  {{ Form::close() }}
</div>
@endsection
