@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1>{{ $post->title }}</h1>

        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
        <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

              <img src="https://source.unsplash.com/1200x400?{{ $post->category }}" class="img-fluid mt-2" alt="{{ $post->title }}">

      <article class="my-5">
        {!! $post->body !!}
      </article>
    <a href="/dashboard/posts">Back to post</a>
    </div>
  </div>
</div>
  
@endsection