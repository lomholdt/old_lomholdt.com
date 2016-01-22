@extends('layouts.app')

@section('content')
<div class="container">
    @foreach(array_chunk($posts->all(), 3) as $row)
        <div class="row">
            @foreach($row as $post)
                <div class="col-md-4">
                    <h2><a href="{{ action('PostsController@show', [$post->slug]) }}">{{ $post->title }}</a></h2>
                    <div class="body">
                        {{ $post->body }}
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <div class="col-md-12 text-center">
        {!! $posts->links() !!}
    </div>
</div>
    

@endsection