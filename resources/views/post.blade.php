@extends('layouts.main')

@section('container')

<div class="container">
	<div class="row justify-content-center mb-5">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

				<p>By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

				@if ($post->image)
		                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid mt-2" alt="{{ $post->title }}">
	            @else
	              	<img src="https://source.unsplash.com/1200x400?{{ $post->category }}" class="img-fluid" alt="{{ $post->title }}">
	          @endif

					  	

			<article class="my-5">
				{!! $post->body !!}
			</article>
		<a href="/blog">Back to post</a>
		</div>
	</div>
</div>
	
@endsection