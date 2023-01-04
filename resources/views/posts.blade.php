@extends('layouts.main')
@section('container')
	@foreach($posts as $post)
		<article class="mb-5 border-bottom">
			<h1>
				<a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
			</h1>
			<p>By. <a href="/categories/{{ $post->user->slug }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
			{{-- <h5>By: {{ $post['author'] }}</h5> --}}
			<p>{{ $post->excerpt }}</p>
			<a href="/posts/{{ $post->slug }}">Read more..</a>
		</article>
	@endforeach
@endsection