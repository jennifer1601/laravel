@extends('layout.index')

@section('content')
<div class="row">
	<div class="col-xl-4 col-lg-4 col-md-4 col-xs-12">
		<h4>RECENT POST</h4>
		<div class="list-group">
			@foreach($posts as $pot)
				<a href="/blog/{{$pot['id']}}" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">{{$pot['title']}}</h5>
					<small>{{$pot['created_at']}}</small>
					</div>
				</a>
			@endforeach
		</div>
	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-xs-12">
		<img src="{{$post['imgurl']}}" alt="..." class="img-blog">
		<h4>{{$post['title']}}</h4>
		<i class="fa fa-clock-o"></i> {{$post['created_at']}}
		{!!$post['bodypost']!!}
	</div>
</div>
@endsection