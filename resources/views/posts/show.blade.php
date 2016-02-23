@extends('layouts.app')

@section('content')

<div class="container">

    <div class="page-header">
    	<h1>{!! $post->title !!} <small>{{ $post->created_at }}</small></h1>
    	<h4>Post by {{ $post->user()->first()->name }}</h4>
    </div>
    
    <div>
    	<p>{!! $post->body !!}</p>
    </div>

    @if(!Auth::guest())
	    <form action="/blog/{{ $post->slug }}" method="POST">
	    	{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<button class="btn btn-danger">Delete Post</button>
	    </form>
	    <a href ="/blog/{{ $post->slug }}/edit" class="btn btn-info">Edit Post</a>

    @endif

</div>

@endsection