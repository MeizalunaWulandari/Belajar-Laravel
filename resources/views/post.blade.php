@extends('layouts.main')

@section('container')
	<article class="mb-5">
			<h1>
				{{ $post->title }}
			</h1>
			{{-- <h5>By: {{ $post->author }}</h5> --}}
			{!! $post->body !!}
		</article>
		<a href="/blog">Back to post</a>
@endsection