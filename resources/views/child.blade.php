@extends('layout.index')

@section('about')
<div class="row mb-4">
	<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
		<h1>Vision</h1>
		<p>Delivering results-oriented brand marketing programs and public relations campaigns that enhance our clients’ awareness, improve their sales and foster their growth.</p>
	</div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
		<h1>Mission</h1>
		<p>To provide innovative and effective integrated brand marketing and public relations solutions which help our clients grow their businesses and realize their marketing goals.</p>
	</div>
</div>
<h1>Value</h1>
<div class="row value">
	<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
		<ul>
			<li><strong>We’re here to serve our clients.<br></strong>Our commitment to our clients is deeply ingrained in our corporate culture – and we go above and beyond 	every day to prove it. It’s in our DNA. </li>
			<li><strong>We get to know your business.<br></strong>We keep abreast of what’s going on in your business and ours — so we can deliver the best marketing 	solutions possible.</li>
			<li><strong>We’re passionate about what we do.<br></strong>We never lose sight of what matters most: our relationship with the client. We only succeed when our 	clients succeed.</li>
			<li><strong>We’re great to work with.<br></strong>We like to have fun, but we’re serious about results. We have strong opinions, but no attitude. We know our 	craft, but are open minded and all ideas are welcome.</li>
		</ul>
	</div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
		<ul>
			<li><strong>We are creative, but smart too.<br></strong>We produce clever work, but always keep the objective of each campaign top of mind.</li>
			<li><strong>We do the right thing.<br></strong>We recommend tactics that make sense, even if it means less money in our pocket. We find the most cost-effective 	means to achieve your goals.</li>
			<li><strong>We are results-oriented.<br></strong>Pure and simple, that’s what we and our clients care about most – the bottom line! Cool, award-winning creative 	is great – but tangible results are even better. We strive for both.</li>
		</ul>
	</div>
</div>
	
		
@endsection 

@section('index')
<h1 class="heading">Latest News</h1>
<div class="underline ml-auto mr-auto"></div>
<div class="row mt-3">
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<img src="/img/a.jpg" alt="..." class="img-thumbnail">
		<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ab illo cumque voluptas maxime ratione commodi molestiae! Earum id velit fugiat, voluptatem quos repellat, culpa optio veniam aliquid cupiditate minima.</p>
		<a href="/blog" class="btn-primary btn">Read More</a>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<img src="/img/a.jpg" alt="..." class="img-thumbnail">
		<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ab illo cumque voluptas maxime ratione commodi molestiae! Earum id velit fugiat, voluptatem quos repellat, culpa optio veniam aliquid cupiditate minima.</p>
		<a href="/blog" class="btn-primary btn">Read More</a>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<img src="/img/a.jpg" alt="..." class="img-thumbnail">
		<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ab illo cumque voluptas maxime ratione commodi molestiae! Earum id velit fugiat, voluptatem quos repellat, culpa optio veniam aliquid cupiditate minima.</p>
		<a href="/blog" class="btn-primary btn">Read More</a>
	</div>
</div>
@endsection

@section('services')
<h1 class="heading">Our Services</h1>
<div class="underline ml-auto mr-auto"></div>
<div class="row text-center mt-4">
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
		<h4>Digital Marketing</h4>
		<p>Businesses leverage digital channels such as search engines, social media, email, and their websites to connect with current and prospective customers.</p>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<i class="fa fa-camera fa-3x" aria-hidden="true"></i>
		<h4>Social Media</h4>
		<p>This practice promotes your brand and your content on social media channels to increase brand awareness, drive traffic, and generate leads for your business.</p>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<i class="fa fa-search fa-3x" aria-hidden="true"></i>
		<h4>Search Engine Optimization</h4>
		<p>This is the process of optimizing your website to "rank" higher in search engine results pages, thereby increasing the amount of organic (or free) traffic your website receives. </p>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<i class="fa fa-pencil fa-3x" aria-hidden="true"></i>
		<h4>Content Writer</h4>
		<p>This term denotes the creation and promotion of content assets for the purpose of generating brand awareness, traffic growth, lead generation, and customers. </p>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<i class="fa fa-paint-brush fa-3x" aria-hidden="true"></i>
		<h4>Branding &#38; Design</h4>
		<p>the creation of a plan or convention for the construction of an object, system or measurable human interaction.</p>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<i class="fa fa-desktop fa-3x" aria-hidden="true"></i>
		<h4>Web & Apps Development</h4>
		<p>software designer or engineer who is involved in the development and design of web and/or network applications.</p>
	</div>
</div>
@endsection

@section('team')
<h1 class="heading">Our Team</h1>
<div class="underline ml-auto mr-auto mb-3"></div>
<div class="row text-center">
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<img src="/img/team/1.jpg" alt="..." class="img-thumbnail">
		<h4>Andi</h4>
		<p>Project Manager</p>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<img src="/img/team/2.jpg" alt="..." class="img-thumbnail">
		<h4>Budi</h4>
		<p>Analyst</p>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<img src="/img/team/3.jpg" alt="..." class="img-thumbnail">
		<h4>Sita</h4>
		<p>Developer</p>
	</div>
</div>
@endsection

@section('contact')
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
		<h6>facebook : eBusiness</h6>
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

@section('blog')
	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-4 col-xs-12">
			<h4>RECENT POST</h4>
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">List group item heading</h5>
					<small>3 days ago</small>
					</div>
					<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					<small>Donec id elit non mi porta.</small>
				</a>
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">List group item heading</h5>
					<small class="text-muted">3 days ago</small>
					</div>
					<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					<small class="text-muted">Donec id elit non mi porta.</small>
				</a>
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">List group item heading</h5>
					<small class="text-muted">3 days ago</small>
					</div>
					<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					<small class="text-muted">Donec id elit non mi porta.</small>
				</a>
			</div>
		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-xs-12">
			<img src="/img/a.jpg" alt="..." class="img-blog">
			<h4>POST TITLE</h4>
			<i class="fa fa-user"></i> Admin
			<i class="fa fa-clock-o"></i> 24 March 2018 
			<p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>

			<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>

			<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
		</div>
	</div>
@endsection