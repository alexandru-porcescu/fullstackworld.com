<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class PostsController extends Controller
{
    function index()
    {
        $posts = WinkPost::whereHas('tags', function ($query) {
            $query->where('name', 'Journal');
        })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('frontend.posts.index', compact('posts'));
    }

    function post($slug)
    {
        $selectedPost = WinkPost::with('tags')
            ->live()
            ->where('slug', $slug)
            ->first();

        if (!$selectedPost) {
            return abort(404);
        }

        $postType = $selectedPost->tags->where('name', 'Journal')->count() ? 'Journal' : 'Post';
        $tags = $selectedPost->tags->pluck('name')->toArray();

        $similarPosts = WinkPost::whereHas('tags', function ($query) use($tags) {
                $query->whereIn('name', $tags);
            })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(3)->get();

        return view('frontend.posts.post', compact('selectedPost', 'postType', 'similarPosts'));
    }
}
