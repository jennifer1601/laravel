@extends('layout.index')

@section('content')
<h1 class="heading">Latest News</h1>
<div class="underline ml-auto mr-auto"></div>
<div class="row mt-3">
	@foreach($posts as $post)
	<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
		<img src="{{$post['imgurl']}}" alt="..." class="img-thumbnail">
		<h3 style="white-space: nowrap;overflow: hidden;text-overflow:ellipsis;">{{$post['title']}}</h3>
		<a href="{{route('blog',['id'=>$post['id']])}}" class="btn-primary btn">Read More</a>
	</div>
	@endforeach
</div>
@endsection