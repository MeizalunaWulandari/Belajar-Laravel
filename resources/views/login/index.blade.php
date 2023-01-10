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
				    <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
	 			<form action="/login" method="POST">
	    			<div class="form-floating">
	      				<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
	      				<label for="floatingInput">Email address</label>
	    			</div>
	    			<div class="form-floating">
	      				<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
	      				<label for="floatingPassword">Password</label>
	    			</div>
	    				<button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  				</form>

  				<small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>

			</main>
		</div>
	</div>

 
 
 @endsection