<?php

namespace App\Http\Controllers;

use App\Models\WinkPost;

class PostsController extends Controller
{
    public function index()
    {
        $posts = WinkPost::whereHas('tags', function ($query) {
            $query->where('name', 'Journal');
        })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('frontend.posts.index', compact('posts'));
    }

    public function post($slug)
    {
        $query = WinkPost::with('tags');

        if (! request('draft')) {
            $query = $query->live();
        }

        $selectedPost = $query
            ->where('slug', $slug)
            ->first();

        if (! $selectedPost) {
            return abort(404);
        }

        // Add 60 minutes delay page view entry
        views($selectedPost)->delayInSession(60)->record();

        $postType = $selectedPost->tags->where('name', 'Journal')->count() ? 'Journal' : 'Post';
        $tags = $selectedPost->tags->pluck('name')->toArray();

        $similarPosts = WinkPost::whereHas('tags', function ($query) use ($tags) {
            $query->whereIn('name', $tags);
        })
            ->where('id', '<>', $selectedPost->id)
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(3)->get();

        return view('frontend.posts.post', compact('selectedPost', 'postType', 'similarPosts'));
    }
}
