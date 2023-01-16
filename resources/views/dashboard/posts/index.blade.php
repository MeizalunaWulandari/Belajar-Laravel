@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
      </div>
      @if (session()->has('success'))
          <div class="alert alert-primary col-8">
              {{ session('success') }}
          </div>
      @endif
      
      <a href="/dashboard/posts/create" class="btn btn-info mb-3">Create new post</a>
      <div class="table-responsive col-lg-8">
          <table class="table table-striped table-sm">
              <thead>
                    <tr>
                      <th class="col">#</th>
                      <th class="col">Title</th>
                      <th class="col">Category</th>
                      <th class="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                    @foreach ($posts as $post)
                      <tr>
                          <th>{{ $loop->iteration }}</th>
                          <th>{{ $post->title }}</th>
                          <th>{{ $post->category->name }}</th>
                          <th>
                              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i data-feather="eye"></i></a>
                              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i data-feather="edit"></i></a>
                              <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                              </form>
                          </th> 
                      </tr>
                    @endforeach
              </tbody>
          </table>
      </div>
@endsection
