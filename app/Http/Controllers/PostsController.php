<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;

class PostsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['show', 'index']]);
	}

	public function index()
	{
		$posts = Post::paginate(9);
		return view('posts.index', compact('posts'));
	}

	public function store(CreatePostRequest $request)
	{
		$post = new Post;
		$post->title = $request->title;
		$post->body = $request->body;

		$post->save();

		return redirect('/blog/'.$post->slug);
	}

	public function create()
	{
		return view('posts.create');
	}

    public function show($slug)
    {
    	$post = Post::whereSlug($slug)->firstOrFail();
    	return view('posts.show', compact('post'));
    }

    public function edit($slug){


    }
}
