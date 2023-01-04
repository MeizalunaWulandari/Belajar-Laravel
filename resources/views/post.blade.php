@extends('layouts.main')

@section('container')
	<article class="mb-5">
			<h1>
				{{ $post->title }}
			</h1>
			<p>By. <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
			{{-- <h5>By: {{ $post->author }}</h5> --}}
			{!! $post->body !!}
		</article>
		<a href="/blog">Back to post</a>
@endsection