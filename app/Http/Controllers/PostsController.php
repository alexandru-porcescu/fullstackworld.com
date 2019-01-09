<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class PostsController extends Controller
{
    function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(5);

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
