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
    <header>
   <img src="https://bit.ly/2rlzaXi" alt="Five developers at work.">
        <section class='hero-header-text'>
            <h1>Ellen Macpherson</h1>
            <h2>Just another tech blog.</h2>
            <button>Read more.</button>
        </section>
    </header>
    
    <!-- <h1 class="text-white" style="margin-left:30%;padding-top:10%">The z-index Property</h1>
    
    <img class="w-100" src="{{ url('/images/first.jpg') }}" style="linear-gradient(black, black);position:absolute;left:0px;top:0px;z-index:-1;" height="650">
    <p>Because the image has a z-index of -1, it will be placed behind the heading.</p> -->

</body>
</html>