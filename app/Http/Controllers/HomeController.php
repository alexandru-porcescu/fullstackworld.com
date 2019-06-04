<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use willvincent\Feeds\Facades\FeedsFacade;

class HomeController extends Controller
{
    public function index()
    {
        /*
        $jobs = FeedsFacade::make('https://larajobs.com/feed');
        $t = $jobs->get_items()[0];
        dd([$t->get_title(), $t->get_id(), $t->get_date(), $t->get_author(), $t->get_permalink()]);
        */

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
