<?php

namespace App\Http\Controllers;

use App\Models\WinkPost;

class HomeController extends Controller
{
    public function index()
    {
        $blockAdsense = true;

        $topPosts = WinkPost::live()
            ->orderByViews()
            ->limit(5)
            ->get();

        $laravelPosts = WinkPost::getPostsByTag('laravel');
        $vuejsPosts = WinkPost::getPostsByTag('vuejs');
        $angularPosts = WinkPost::getPostsByTag('angular');

        return view('frontend.home.index', compact('laravelPosts', 'vuejsPosts', 'angularPosts', 'blockAdsense', 'topPosts'));
    }
}
