@extends('layouts.main')
@section('container')
	
	<div class="row justify-content-center">
		<div class="col-lg-5">


			<main class="form-signin w-100 m-auto">
			@if (session()->has('success'))
				<div class="alert alert-success" role="alert">
  					{{ session('success') }}
				</div>
			@endif

			@if (session()->has('loginError'))
				<div class="alert alert-danger" role="alert">
  					{{ session('loginError') }}
				</div>
			@endif
				    <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

	 			<form action="/login" method="POST">
	 				@csrf
	    			<div class="form-floating">
	      				<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}" required >
	      				@error('email')
	      				<div class="invalid-feedback">{{ $message }}</div>
	      				@enderror
	      				<label for="email">Email address</label>
	    			</div>
	    			<div class="form-floating">
	      				<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
	      				@error('password')
	      				<div class="invalid-feedback">{{ $message }}</div>
	      				@enderror
	      				<label for="password">Password</label>
	    			</div>
	    				<button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  				</form>

  				<small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>

			</main>
		</div>
	</div>

 
 
 @endsection