<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Wink\WinkTag;

class TagsController extends Controller
{
    function index($slug)
    {
        $tag = WinkTag::where('slug', $slug)->first();
        
        if (!$tag) {
            return abort(404);
        }
        
        $posts = WinkPost::with('tags')->whereHas('tags', function ($query) use($tag) {
            $query->where('slug', $tag->slug);
        })
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->simplePaginate(10);

        return view('frontend.tags.index', compact('posts'));
    }
}
