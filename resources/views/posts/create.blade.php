@extends('layouts.app2')
@section('title','| Create New Post')
@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create new post</h1>
			<hr/>
			@if(count($errors)>0)
			<div>
				<ul>
					@foreach($errors->all() as $error)
						{{ $error }}
					@endforeach
				</ul>
			</div>
		@endif
			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate'=>'')) !!}
    			{{ Form::label('title','Title:') }}
    			{{ Form::text('title', null, array('class'=>'form-control', 'required'=>'', 'max-length'=>'255')) }}
					{{ Form::label('slug','Slug:') }}
					{{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'min-length'=>'5', 'max-length'=>'255')) }}
					{{ Form::label('category', 'Category:') }}
					<select class="form-control" name="category_id">
						@foreach($categories as $category)
							<option value={{ $category->id  }} > {{ $category->name }} </option>
						@endforeach

					</select>
					{{ Form::label('body','Post Body:') }}
    			{{ Form::textarea('body', null, array('class'=>'form-control', 'required'=>'')) }}
    			{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin:20px 0px;')) }}
			{!! Form::close() !!}
		</div>

	</div>
@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection
