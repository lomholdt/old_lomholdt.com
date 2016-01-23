@extends('layouts.app')

@section('content')


<div class="container">
	
	<h1>Update Post</h1>
	
	<form method="POST" action="/blog/{{ $post->slug }}">

		{{ csrf_field() }}

		{{ method_field('PATCH') }}

		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
			@foreach ($errors->get('title') as $error)
				<div class="alert alert-danger" role="alert">
				  	{{ $error }}
				</div>
			@endforeach
		</div>		

		<div class="form-group">
			<label for="body">Body:</label>
			<textarea type="text" name="body" id="body" cols="30" rows="10"  class="form-control">{{ $post->body }}
			</textarea>
			@foreach ($errors->get('body') as $error)
				<div class="alert alert-danger" role="alert">
				  	{{ $error }}
				</div>
			@endforeach
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-default">Update Post</button>
		</div>
	</form>

</div>

@endsection