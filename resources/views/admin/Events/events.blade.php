@extends('admin')
@section('content')
<h1 class="sectionTitle">ჩემი ივენთები<a href="{{ URL::to('Admin/Events/create') }}">ივენთის დამატება</a></h1>
  @forelse ($posts as $post)
    <div class="adminItem">
      <h1>{{ $post->title }}<i data-id="{{ $post->id }}"></i></h1>
      <ul class="itemSett" data-id="{{ $post->id }}">
        <li><a href="{{ URL::to('Admin/Events/edit', $post->id) }}">რედაქტირება</a></li>
        <li><a class="delete" data-token="{{ csrf_token() }}" href="{{ URL::to('Admin/Events/destroy', $post->id) }}">წაშლა</a></li>
      </ul>
    </div>
  @empty
    <div class="adminInfo">ივენთები არ არის.</div>
  @endforelse
{!! $posts->links(); !!}
  <script>

  </script>

@endsection
