<!doctype html>
<html lang="en">
  <head>
    @include('layout.head')
    <title> Business </title>
  </head>

  <body>
	<!-- nav -->
@include('layout.navbar')
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
	@yield('content')
	<!-- content -->
</div>
<!-- container -->

<!-- footer -->
@include('layout.footer')
<!-- footer -->


@include('layout.script')
  </body>
</html>
<!-- //ff8d75 -->