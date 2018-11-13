@extends('layout.index')

@section('content')
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