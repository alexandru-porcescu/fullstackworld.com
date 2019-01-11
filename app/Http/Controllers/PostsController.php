<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class PostsController extends Controller
{
    function index()
    {
        $posts = WinkPost::whereHas('tags', function ($query) {
                $query->where('name', 'Journal');
            })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('frontend.posts.index', compact('posts'));
    }

    function post($slug)
    {
        $post = WinkPost::with('tags')
            ->live()
            ->where('slug', $slug)
            ->first();
        return view('frontend.posts.post', compact('post'));
    }
}
