@extends('layouts.app2')
@section('title', '| contact me')
@section('styles')
<link rel="stylesheet" href="style/style.css">
@endsection
@section('content')
<div class="container">
<div class="row">
		<div class="col-md-8">
		<h3>Contact me</h3>
		<hr>
		
		<form>
			<div class="form-group">
				<label name="email">email</label>
				<input id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label name="subject">subject</label>
				<input id="subject" name="subject" class="form-control">
			</div>
			<div class="form-group">
				<label name="message">message</label>
				<textarea id="message" name="message" class="form-control">message</textarea>
			</div>
			<input type="submit" value="submit" name="submit" class="btn btn-success"/>
			</form>
		</div>
</div>
</div>
@endsection

@section('scripts')
<script>
	confirm('I loaded some js');
</script>
@endsection