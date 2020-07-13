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
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item drk active">
	      <img class="d-block w-100" src="{{ url('/images/nasa.jpg') }}" alt="First slide">
		    <div class="carousel-caption d-md-block">
			    <h5>FIRST IMAGE</h5>
			    <p>First Image</p>
			    <button class="btn btn-primary">READ MORE</button>
			    <button class="btn btn-primary">ABOUT US</button>
			</div>
	    </div>
	    <div class="carousel-item drk">
	      <img class="d-block w-100" src="{{ url('/images/moon.jpg') }}" alt="Second slide">
	      	<div class="carousel-caption d-md-block">
			    <h5>Second Image</h5>
			    <p>Second Image</p>
			</div>
	    </div>
	    <div class="carousel-item drk">
	      <img class="d-block w-100" src="{{ url('/images/galaxy.jpg') }}" alt="Third slide">
	      	<div class="carousel-caption d-md-block">
			    <h5>THIRD IMAGE</h5>
			    <p>Third Image</p>
			</div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
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
		      	<a href="#" class="text-white">
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
			      <div class="card-body" id="onhover-text-change-1">
			      	<a href="#"  class="text-dark">
			      		<img src="{{ url('/images/donationforpoor.png') }}" id="img_donationforpoor" height="40" width="40" class="d-block ml-auto mr-auto img-fluid">
				        <h6 class="card-title text-center pt-3 text-of-card">Donation For Poor</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>

			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change-2">
			      	<a href="index.html" class="text-dark">
			      		<img src="{{ url('/images/savethedream.png') }}" id="img_savethedream" height="40" width="35" class="d-block ml-auto mr-auto">
				        <h6 class="card-title text-center pt-3">Save The Dream</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      	<div class="card-body" id="onhover-text-change-3">
				      	<a href="index.html" class="text-dark">
				      		<img src="{{ url('/images/makeworldhappy.png') }}" id="img_makeworldhappy" height="40" width="40" class="d-block ml-auto mr-auto">
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
			      <div class="card-body" id="onhover-text-change-4">
			      	<a href="#" class="text-dark">
			      		<img src="{{ url('/images/bettereducation.png') }}" id="img_bettereducation" id="my_image" height="40" width="40" class="d-block ml-auto mr-auto">
				        <h6 class="card-title text-center pt-3">Better Education</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change-5">
			      	<a href="index.html" class="text-dark">
			      		<img src="{{ url('/images/medicallyassisted.png') }}" id="img_medicallyassisted" height="38" width="40" class="d-block ml-auto mr-auto">
				        <h6 class="card-title text-center pt-3">Medically Assisted</h6>
				        <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
			      	</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-4 pb-2">
			    <div class="card onhover-colour">
			      <div class="card-body" id="onhover-text-change-6">
			      	<a href="index.html" class="text-dark">
			      		<img src="{{ url('/images/helpthehelpless.png') }}" id="img_helpthehelpless" height="40" width="40" class="d-block ml-auto mr-auto">
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
    			<div class="col-md-4" id="latestupdates-1">
    				<div class="img-container rounded">
    					<div class="img-text text-center">01 JUN<br>2019</div>
    					<img src="{{ url('/images/nasa.jpg') }}" class="updates-image">
    				</div>
    				<div><b>Article Heading</b><br>Some text of the latest update to go here and it has to go here only</div>
    			</div>
    			<div class="col-md-4">
    				<div class="img-container rounded">
    					<div class="img-text text-center">01 JUN<br>2019</div>
    					<img src="{{ url('/images/moon.jpg') }}" class="updates-image">
    				</div>
    				<div><b>Article Heading</b><br>Some text of the latest update to go here and it has to go here only</div>
    			</div>
    			<div class="col-md-4">
    				<div class="img-container rounded">
    					<div class="img-text text-center">01 JUN<br>2019</div>
    					<img src="{{ url('/images/galaxy.jpg') }}" class="updates-image">
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