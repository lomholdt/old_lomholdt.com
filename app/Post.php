<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'body'];

    public static function boot()
    {
    	parent::boot();

    	static::creating(function($post){

    		$post->slug = str_slug($post->title);

    		$latestSlug = 
    			static::whereRaw("slug RLIKE '^{$post->slug}(-[0-9]*)?$'")
    				->latest('id')
    				->value('slug');

    		if($latestSlug)
    		{
    			$pieces = explode('-', $latestSlug);
    			$number = intval(end($pieces));
    			$post->slug .= '-' . ($number + 1);
    		}

    	});
    }

}
