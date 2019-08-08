<?php

namespace App\Http\Controllers;

use App\Models\WinkPost;
use CyrildeWit\EloquentViewable\Support\Period;

class HomeController extends Controller
{
    public function index()
    {
        $blockAdsense = true;

        $topPosts = WinkPost::live()
            ->orderByViews('asc', Period::pastDays(10))
            ->limit(5)
            ->get();

        $laravelPosts = WinkPost::getPostsByTag('laravel');
        $vuejsPosts = WinkPost::getPostsByTag('vuejs');
        $angularPosts = WinkPost::getPostsByTag('angular');

        return view('frontend.home.index', compact('laravelPosts', 'vuejsPosts', 'angularPosts', 'blockAdsense', 'topPosts'));
    }
}
