<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class HomeController extends Controller
{
    function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(5);

        return view('frontend.home.index', compact('posts'));
    }
}
