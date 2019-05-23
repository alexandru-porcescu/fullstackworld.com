<?php

namespace App\Http\Controllers;

use Wink\WinkTag;
use Wink\WinkPost;

class TagsController extends Controller
{
    public function index($slug)
    {
        $blockAdsense = true;

        $tag = WinkTag::where('slug', $slug)->first();

        if (! $tag) {
            return abort(404);
        }

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
