@extends('layouts.app')

@section('content')


<div class="container">
	
	<h1>Create Post</h1>
	
	<form method="POST" action="/blog">

		{{ csrf_field() }}

		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
			@foreach ($errors->get('title') as $error)
				<div class="alert alert-danger" role="alert">
				  	{{ $error }}
				</div>
			@endforeach
		</div>		

		<div class="form-group">
			<label for="body">Body:</label>
			<textarea type="text" name="body" id="body" cols="30" rows="10"  class="form-control">
				{{ old('body') }}
			</textarea>
			@foreach ($errors->get('body') as $error)
				<div class="alert alert-danger" role="alert">
				  	{{ $error }}
				</div>
			@endforeach
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-default">Create Post</button>
		</div>
	</form>

</div>

@endsection