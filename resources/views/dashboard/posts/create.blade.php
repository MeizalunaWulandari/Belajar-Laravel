@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new post</h1>
      </div>

      <div class="col-lg-8">
      	<form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
      		@csrf
      		<div class="mb-3">
      			<label for="title" class="form-label">Title</label>
      			<input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" name="title" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
      		</div>

      		<div class="mb-3">
      			<label for="slug" class="form-label">Slug</label>
      			<input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" id="slug" name="slug" required>
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
      		</div>
            
            <div class="mb-3">
                <label for="category" class="form-label">Slug</label>
                <select class="form-select" name="category_id" required>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                  <label for="image" class="form-label">Post image</label>
                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">

                @error('image')
                    <small class="text-danger"><br>{{ $message }}</small>
                @enderror  

            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Body</label>
                @error('body')
                    <small class="text-danger"><br>{{ $message }}</small>
                @enderror
                <input type="hidden" id="body" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>

      		<button type="submit" class="btn btn-primary">Submit</button>

      	</form>

      </div>
<script type="text/javascript">
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault()
    })
</script>
@endsection