@extends('admin')
@section('content')
<h1 class="sectionTitle">ივენთის დამატება</h1>
<div class="addForms">

  {{ Form::open(array('url' => 'Admin/Events/store', 'files' => true)) }}
  <div class="right">
  <div class="formGroup">
  {{ Form::submit('ივენთის დამატება', array('class' => 'button rightButton')) }}
  </div>
  <div class="formGroup">
    {{ Form::label('დაწყების დრო') }}
    {{ Form::text('stime', null, array('class' => 'stime','placeholder'=>'დაწყების დრო')) }}
  </div>
  <div class="formGroup">
      {{ Form::label('დასრულების დრო') }}
      {{ Form::text('etime', null, array('class' => 'etime','placeholder'=>'დასრულების დრო')) }}
  </div>
  <div class="formGroup">
      {{ Form::file('photo', array('id' => 'browseFile')) }}
  </div>
    <div class="upload">
      <div class="browse" onclick="document.getElementById('browseFile').click()"></div>
    </div>
  </div>
  <div class="formGroup">
    {{ Form::label('ივენთის სახელი') }}
    {{ Form::text('name', null, array('class' => 'name','placeholder'=>'ივენთის სახელი')) }}
  </div>
  <div class="formGroup">
    {{ Form::label('ლოკაცია') }}
    {{ Form::text('location', null, array('class' => 'location','placeholder'=>'ლოკაცია')) }}
  </div>
  <div class="formGroup">
    {{ Form::label('განრიგი') }}
    {{ Form::text('agenda', null, array('class' => 'agenda','placeholder'=>'განრიგი')) }}
  </div>
  <div class="formGroup">
    {{ Form::label('სპიკერი') }}
          <div class="multipleSelect">
            <div class="selectedList"></div>
            {{ Form::text('speaker[]', null, array('class' => 'input','placeholder'=>'აირჩიეთ სპიკერი')) }}
          </div>
            <ul class="multipleList">
            <li data-id="1">შოთა იორამაშვილი</li>
            <li data-id="2">დავით გოჩავა</li>
            <li data-id="3">ირაკლი ღარიბაშვილი</li>
            <li data-id="4">ლევან ასათიანი</li>
            <li data-id="5">მარი მელიქიშვილი</li>
            <li data-id="6">ალექსი ამნიაშვილი</li>
            <li data-id="7">სანდრო ასათიანი</li>
            <li data-id="8">ლევან მელიქიშვილი</li>
          </ul>
  </div>
  <div class="formGroup">
    {{ Form::label('აღწერა') }}
    {{ Form::textarea('description', null, array('id' => 'ckeExample')) }}
    <div class="description"></div>
  </div>
  {{ Form::close() }}
</div>
@endsection
