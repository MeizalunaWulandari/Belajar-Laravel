@extends('layouts.main')
@section('container')
	
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<main class="form-registration w-100 m-auto">
				    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
 				<form action="/register" method="POST">
 					@csrf
	    			<div class="form-floating">
	      				<input type="text" name="name" required value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full name">
	      				@error('name')
		      				<div class="invalid-feedback mt- ">
		      					{{ $message }}
		      				</div>
	      				@enderror
	      				<label for="name">Name</label>
	    			</div>

	    			<div class="form-floating">
	      				<input type="text" name="username" required value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
	      				
	      				@error('username')
		      				<div class="invalid-feedback mt- ">
		      					{{ $message }}
		      				</div>
	      				@enderror
	      				<label for="username">Username</label>
	    			</div>

	    			<div class="form-floating">
	    				<input type="email" name="email" required value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
	    				
	    				@error('email')
		      				<div class="invalid-feedback mt- ">
		      					{{ $message }}
		      				</div>
	      				@enderror
	    				<label for="email">Email address</label>
	    			</div>

	    			<div class="form-floating">
	      				<input type="password" name="password" required value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
	      				
	      				@error('password')
		      				<div class="invalid-feedback mt- ">
		      					{{ $message }}
		      				</div>
	      				@enderror
	      				<label for="password">Password</label>
	    			</div>
	    				<button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  				</form>

  				<small class="d-block text-center mt-3">Already registered? <a href="/login">Login Now!</a></small>

			</main>
		</div>
	</div>

 
 
 @endsection