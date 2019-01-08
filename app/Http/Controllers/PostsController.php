<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    function index()
    {
        return view('frontend.posts.index');
    }

    function post($slug)
    {
        return view('frontend.posts.post');
    }
}
