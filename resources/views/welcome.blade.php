<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.cdn')
    <title>Home Page</title>
</head>

<body>
	<!-- Navbar starts -->
	@include('layouts.navbar')
	<!-- Navbar ends --> 

	<!-- Image Carousel starts -->
	<div id="ImageCarousel" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	 		<img class="d-block w-100 img-fluid" style="height: 600px" src="{{ url('/images/first.jpg') }}" alt="Second slide">
	 		<div class="carousel-caption" style="padding-bottom: 20%">
	 			<h2>We are Relaible</h2>
	 			<button class="btn btn-primary">Read More</button>&nbsp;
	 			<button class="btn btn-primary">About Us</button>
	 		</div>
	    </div>
	    <div class="carousel-item">
	      	<img class="d-block w-100 img-fluid" src="{{ url('/images/second.jpg') }}" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      	<img class="d-block w-100 img-fluid" src="{{ url('/images/third.jpg') }}" alt="Third slide">
	    </div>
	  </div>
	</div>
	<!-- Carousel left and right controls -->
	<a class="carousel-control-prev" href="#ImageCarousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#ImageCarousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
	<!-- Image Carousel ends -->

	<!-- Donate and Volunteer card -->
	<div class="container p-5">
		<div class="row">
		  <div class="col-md-6">
		    <div class="card">
		      <div class="card-body rounded">
		      	<a href="#" class="text-dark">
			        <h5 class="card-title text-center">Donate to us</h5>
			        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		      	</a>
		      </div>
		    </div>
		  </div>
		  <div class="col-md-6">
		    <div class="card" id="volunteer-card">
		      <div class="card-body border card-background rounded" >
		      	<a href="index.html" class="text-white">
			        <h5 class="card-title text-center">Become a Volunteer</h5>
			        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		      	</a>
		      </div>
		    </div>
		  </div>
		</div>
    </div>

    <!-- "Our Mission" section -->
    <div class="w-100 mission pb-5">
    	<h3 class="text-center p-5">Our Mission</h3>

    	<div class="container pb-4">
			<div class="row">

			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change">
			      	<a href="#"  class="text-dark">
			      		<img src="{{ url('/images/donationforpoor.png') }}" height="40" width="40" class="d-block ml-auto mr-auto img-fluid">
				        <h6 class="card-title text-center pt-3 text-of-card">Donation For Poor</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>

			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change">
			      	<a href="index.html" class="text-dark">
			      		<img src="{{ url('/images/savethedream.png') }}" height="40" width="35" class="d-block ml-auto mr-auto">
				        <h6 class="card-title text-center pt-3">Save The Dream</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      	<div class="card-body" id="onhover-text-change">
				      	<a href="index.html" class="text-dark">
				      		<img src="{{ url('/images/makeworldhappy.png') }}" height="40" width="40" class="d-block ml-auto mr-auto">
					        <h6 class="card-title text-center pt-3">Make World Happy</h6>
					        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
				      	</a>
			    	</div>
			    </div>
			  </div>
			</div>
	    
			<div class="row">
			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change">
			      	<a href="#" class="text-dark">
			      		<img src="{{ url('/images/bettereducation.png') }}" height="40" width="40" class="d-block ml-auto mr-auto">
				        <h6 class="card-title text-center pt-3">Better Education</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change">
			      	<a href="index.html" class="text-dark">
			      		<img src="{{ url('/images/medicallyassisted.png') }}" height="38" width="40" class="d-block ml-auto mr-auto">
				        <h6 class="card-title text-center pt-3">Medically Assisted</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change">
			      	<a href="index.html" class="text-dark">
			      		<img src="{{ url('/images/helpthehelpless.png') }}" height="40" width="40" class="d-block ml-auto mr-auto">
				        <h6 class="card-title text-center pt-3">Help The Helpless</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>
			</div>
	    </div>
    </div>
    <!-- "Our Mission" section ends -->

    <!-- Latest Updates section -->
    <div>
    	<h3 class="text-center p-5">Latest Updates</h3>
    	<div class="container">
    		<div class="row pb-5">
    			<div class="col-md-4">
    				<div class="img-container rounded">
    					<div class="img-text text-center">01 JUN<br>2019</div>
    					<img src="{{ url('/images/third.jpg') }}" class="w-100" style="height: 250px;">
    				</div>
    				<div><b>Article Heading</b><br>Some text of the latest update to go here and it has to go here only</div>
    			</div>
    			<div class="col-md-4">
    				<div class="img-container rounded">
    					<div class="img-text text-center">01 JUN<br>2019</div>
    					<img src="{{ url('/images/first.jpg') }}" class="w-100" style="height: 250px;">
    				</div>
    				<div><b>Article Heading</b><br>Some text of the latest update to go here and it has to go here only</div>
    			</div>
    			<div class="col-md-4">
    				<div class="img-container rounded">
    					<div class="img-text text-center">01 JUN<br>2019</div>
    					<img src="{{ url('/images/third.jpg') }}" class="w-100" style="height: 250px;">
    				</div>
    				<div><b>Article Heading</b><br>Some text of the latest update to go here and it has to go here only</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- latest updates section ends -->

    <!-- Footer -->
    <footer class="text-center text-white p-1">2020 All Rights Reserved</footer>
</body>
<script type="text/javascript" src="{{ url('/js/script.js') }}"></script>
</html>