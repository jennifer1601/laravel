@extends('layout.index')

@section('content')
<h1 class="heading">Contact Us</h1>
<div class="underline ml-auto mr-auto mb-3"></div>
<div class="row text-center">
	<div class="col-xl-3 col-lg-3 col-md-6 col-xs-12">
		<p><i class="fa fa-phone fa-2x"></i></p>
		<h6>Phone : 061 - 4589621</h6>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-6 col-xs-12">
		<p><i class="fa fa-envelope fa-2x"></i></p>
		<h6>E-mail : info@ebusiness.com</h6>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-6 col-xs-12">
		<p><i class="fa fa-facebook-square fa-2x"></i></p>
		<h6>Facebook : eBusiness</h6>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-6 col-xs-12">
		<p><i class="fa fa-map-marker fa-2x"></i></p>
		<h6>Location : Jl. Imam Bonjol No.6, Medan</h6>
	</div>
</div>

<div class="row mt-3">
	<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.006053939921!2d98.67125261450865!3d3.5860841973903934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131ce80b28921%3A0x43c8e34db3e9dcec!2sJl.+Imam+Bonjol+No.6%2C+Petisah+Tengah%2C+Medan+Petisah%2C+Kota+Medan%2C+Sumatera+Utara+20152!5e0!3m2!1sen!2sid!4v1541218699357" width="100%" height="90%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
		<form method="post" action="">
			<div class="form-group"><input class="form-control" type="text" placeholder="Name" name="name"></div>
			<div class="form-group"><input class="form-control" type="email" placeholder="Email" name="email"></div>
			<div class="form-group"><input class="form-control" type="text" placeholder="Subject" name="subject"></div>
			<div class="form-group"><textarea rows="3" class="form-control" name="message" placeholder="message"></textarea></div>
			<div class="form-group"><input type="submit" value="Send" class="form-control btn btn-primary"></div>
		</form>
	</div>
</div>
@endsection