<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class HomeController extends Controller
{
    public function index()
    {
        $blockAdsense = true;

        $topPosts = WinkPost::live()
            ->orderBy('publish_date', 'DESC')
            ->limit(5)
            ->get();

        $laravelPosts = WinkPost::whereHas('tags', function ($query) {
            $query->where('slug', 'laravel');
        })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(6)
            ->get();

        $vuejsPosts = WinkPost::whereHas('tags', function ($query) {
            $query->where('slug', 'vuejs');
        })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(6)
            ->get();

        $angularPosts = WinkPost::whereHas('tags', function ($query) {
            $query->where('slug', 'angular');
        })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(6)
            ->get();

        return view('frontend.home.index', compact('laravelPosts', 'vuejsPosts', 'angularPosts', 'blockAdsense', 'topPosts'));
    }
}
