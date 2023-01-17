@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
      </div>
      @if (session()->has('success'))
          <div class="alert alert-primary col-8">
              {{ session('success') }}
          </div>
      @endif
      
      <a href="/dashboard/categories/create" class="btn btn-info mb-3">Create new category</a>
      <div class="table-responsive col-lg-8">
          <table class="table table-striped table-sm">
              <thead>
                    <tr>
                      <th class="col">#</th>
                      <th class="col">Category name</th>
                      <th class="col">Slug</th>
                      <th class="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                    @foreach ($categories as $category)
                      <tr>
                          <th>{{ $loop->iteration }}</th>
                          <th>{{ $category->name }}</th>
                          <th>{{ $category->slug }}</th>
                          <th>
                              <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i data-feather="eye"></i></a>
                              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i data-feather="edit"></i></a>
                              <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="POST">
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
