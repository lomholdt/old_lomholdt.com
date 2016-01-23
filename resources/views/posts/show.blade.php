@extends('layouts.app')

@section('content')

<div class="container">

    <div class="page-header">
    	<h1>{!! $post->title !!} <small>{{ $post->created_at }}</small></h1>
    </div>
    
    <div>
    	<p>{!! $post->body !!}</p>
    </div>

    <form action="/blog/{{ $post->slug }}" method="POST">
    	{{ csrf_field() }}
		{{ method_field('DELETE') }}

		<button class="btn btn-danger">Delete Post</button>
		
    </form>

</div>

@endsection