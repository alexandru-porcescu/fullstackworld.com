<?php

namespace App\Http\Controllers;

use App\Models\WinkPost;

class SearchController extends Controller
{
    public function index($search)
    {
        return WinkPost::search($search)->where('published', 1)->get();
    }
}
