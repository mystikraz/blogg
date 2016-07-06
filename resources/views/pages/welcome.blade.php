@extends('layouts.app2')
@section('title', 'Raj Tandukar | Welcome')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
  <h1>Welcome to my website!</h1>
  <p class="lead">Thank you for visiting. This is my personal website!</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular posts</a></p>
</div>
		</div>

	</div><!-- /.end row -->

	<div class="row">
		<div class="col-md-8">
		@foreach ($posts as $post)

		<div class="post">
			<h3>{{ $post->title }}</h3>
			<p>{{substr($post->body, 0, 300) }}{{ strlen($post->body)>300 ? "..." : "" }}</p>
			<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">read more</a>
			<hr>
		</div>
	@endforeach

	</div>
		<div class="col-md-3 col-md-offset-1">
			<h3>Sidebar</h3>

		</div>



</div>
</div>
@endsection
