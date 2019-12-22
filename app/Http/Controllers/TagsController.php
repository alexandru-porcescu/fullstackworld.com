<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Wink\WinkTag;

class TagsController extends Controller
{
    public function index($slug)
    {
        $blockAdsense = true;

        $tag = WinkTag::where('slug', $slug)->first();

        if (! $tag) {
            return abort(404);
        }

        // Add 60 minutes delay page view entry
        views($tag)->delayInSession(60)->record();

        $pageTitle = 'Latest in '.$tag->name;

        $posts = WinkPost::with('tags')->whereHas('tags', function ($query) use ($tag) {
            $query->where('slug', $tag->slug);
        })
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->simplePaginate(10);

        return view('frontend.tags.index', compact('posts', 'pageTitle', 'blockAdsense'));
    }
}
