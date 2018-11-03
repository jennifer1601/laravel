<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/favicon.ico">

    <title> Business </title>
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  	<link href="/css/style.css" rel="stylesheet" type="text/css">
  </head>

  <body>
	<!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><img class="logo" src="/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/services">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/achievement">Achievement</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/team">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/blog">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact">Contact</a>
				</li>
			</ul>
        </div>
    </div>
</nav>
<!-- nav -->

@if($path == '/')
<!-- carousel -->
<div class="d-none d-lg-block">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100 darken" src="/img/slider/slider1.jpg" alt="First slide">
				<div class="carousel-caption caption">
					<h3 class="font-weight-bold">The Best Business Information</h3>
    				<h1 class="font-weight-bold">We're In The Business Of Helping You Start Your Business</h1> 
  				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 darken" src="/img/slider/slider2.jpg" alt="Second slide">
				<div class="carousel-caption caption">
					<h3 class="font-weight-bold">The Best Business Information</h3>
    				<h1 class="font-weight-bold">We're In The Business Of Helping You Start Your Business</h1> 
  				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 darken" src="/img/slider/slider3.jpg" alt="Third slide">
				<div class="carousel-caption caption">
					<h3 class="font-weight-bold">The Best Business Information</h3>
    				<h1 class="font-weight-bold">We're In The Business Of Helping You Start Your Business</h1> 
  				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!-- carousel -->
@endif

<!-- container -->
<div class="container content mb-5 mt-5">
	<!-- content -->
	@if($path == '/')
        @yield('index')
    @endif
	@if($path == 'about')
        @yield('about')
    @endif
	@if($path == 'services')
        @yield('services')
    @endif
	@if($path == 'team')
        @yield('team')
    @endif
	<!-- content -->
</div>
<!-- container -->

<!-- footer -->
<footer class="pt-5 pb-3">
	<div class="container">
		<div class="row footer-content">
			<div class="col-xl-4 col-md-6 col-xs-12">
				<h1><img class="logo" src="/img/logo.png"></h1>
			</div>
			<div class="col-xl-4 col-md-6 col-xs-12">
				<h4>Contact</h4>
				<p><i class="fa fa-phone"></i>&nbsp; 061 - 4589621</p>
				<p><i class="fa fa-envelope"></i>&nbsp; info@ebusiness.com</p>
				<p><i class="fa fa-facebook-square"></i>&nbsp; eBusiness</p>
				<p><i class="fa fa-map-marker"></i>&nbsp; Jl. Imam Bonjol No.6, Medan.</p>
			</div>
			<div class="col-xl-4 col-md-6 col-xs-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.006053939921!2d98.67125261450865!3d3.5860841973903934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131ce80b28921%3A0x43c8e34db3e9dcec!2sJl.+Imam+Bonjol+No.6%2C+Petisah+Tengah%2C+Medan+Petisah%2C+Kota+Medan%2C+Sumatera+Utara+20152!5e0!3m2!1sen!2sid!4v1541218699357" width="100%" height="90%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<p>&copy; 2018 eBussiness, All Rights Reserved.</p>
	</div>
</footer>
<!-- footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!-- //ff8d75 -->