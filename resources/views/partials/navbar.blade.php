
  	{{-- Navbar --}}

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
	  		<a class="navbar-brand" href="/">WPU Blog</a>
	  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span>
	  			</button>
	  		<div class="collapse navbar-collapse" id="navbarNav">
	    		<ul class="navbar-nav">
	      			<li class="nav-item {{ ($active === 'home') ? 'active' : '' }}">
	        			<a class="nav-link" href="/">Home</a>
	      			</li>
	      			<li class="nav-item {{ ($active === 'about') ? 'active' : '' }}">
	        			<a class="nav-link" href="/about">About</a>
	      			</li>

	      			<li class="nav-item {{ ($active === 'blog') ? 'active' : '' }}">
	        			<a class="nav-link" href="/blog">Blog</a>
	      			</li>
	      			<li class="nav-item {{ ($active === 'categories') ? 'active' : '' }}">
	        			<a class="nav-link" href="/categories">Categories</a>
	      			</li>

	    		</ul>
	    	</div>
  		</div>
	</nav>
	
  	{{-- Navbar END --}}