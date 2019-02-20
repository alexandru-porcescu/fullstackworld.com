<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class HomeController extends Controller
{
    function index()
    {
        $posts = WinkPost::with('tags')
            ->whereHas('tags', function ($query) {
                $query->where('name', '!=', 'Journal');
            })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('frontend.home.index', compact('posts'));
    }
}
