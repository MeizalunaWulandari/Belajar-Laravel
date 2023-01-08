@extends('layouts.main')
@section('container')
	<h1 class="mb-3 text-center">{{ $title }}</h1>

	<div class="row justify-content-center">
		<div class="col-md-6">
			<form action="/blog">

				@if (request('category'))
					<input type="hidden" name="category" value="{{ request('category') }}">
				@endif

				@if (request('author'))
					<input type="hidden" name="author" value="{{ request('author') }}">
				@endif

				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search.." value="{{ request('search') }}" name="search">
					<button class="btn btn-outline-danger" type="submit">Search</button>
				</div>
			</form>
		</div>
	</div>

	{{-- Cards --}}
@if ($posts->count())
	
	<div class="card mb-3">
	  	<img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category }}" class="card-img-top" alt="{{ $posts[0]->title }}">
	  		<div class="card-body text-center">
	    		<h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
	    					<p>
			    				<small class="text-muted text-dark">
			    					By. <a href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
			    					{{ $posts[0]->created_at->diffForHumans() }}
			    				</small>
	    					</p>
	    					<p class="card-text">{{ $posts[0]->excerpt }}<br>
				<a class="btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>	
	  		</div>
	</div>

	{{-- Cards End --}}


<div class="container">
	<div class="row">
	@foreach($posts->skip(1) as $post)
		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5);">
					<a class="text-white" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
				</div>
			 	<img src="https://source.unsplash.com/500x400?{{ $post->category }}" class="card-img-top" alt="{{ $post->title }}">
			  		<div class="card-body">
			    		<h5 class="card-title"><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
			    			<p>
			    				<small class="text-muted text-dark">
			    					By. <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
			    					{{ $post->created_at->diffForHumans() }}
			    				</small>
	    					</p>
			    			<p class="card-text">{{ $post->excerpt }}</p>
			    			<a href="posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
			  		</div>
			</div>
		</div>
	@endforeach
	</div>
</div>

@else
	<p class="text-center fs-4">No Post Found</p>
@endif
	
	{{ $posts->links() }}	


@endsection