@extends('layouts.main')

@section('container')

<div class="container">
	<div class="row justify-content-center mb-5">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

				<p>By. <a href="#">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

					  	<img src="https://source.unsplash.com/1200x400?{{ $post->category }}" class="img-fluid" alt="{{ $post->title }}">

			<article class="my-5">
				{!! $post->body !!}
			</article>
		<a href="/blog">Back to post</a>
		</div>
	</div>
</div>
	
@endsection