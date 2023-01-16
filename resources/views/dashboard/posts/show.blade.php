@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1>{{ $post->title }}</h1>

        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
              @method('delete')
              @csrf
            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
          </form>

          @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid mt-2" alt="{{ $post->title }}">
            </div>
            @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->category }}" class="img-fluid mt-2" alt="{{ $post->title }}">
          @endif

      <article class="my-5">
        {!! $post->body !!}
      </article>
    <a href="/dashboard/posts">Back to post</a>
    </div>
  </div>
</div>
  
@endsection