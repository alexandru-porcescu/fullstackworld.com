<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{
    function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('frontend.blog.index', compact('posts'));
    }
}
