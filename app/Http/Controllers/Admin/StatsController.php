<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Wink\WinkPost;

class StatsController extends Controller
{
    function index()
    {
        if(!auth('wink')->check()) {
            return redirect()->route('wink.auth.login');
        }

        $livePost = WinkPost::with('tags')
            ->live()
            ->count();

        $stats = [
            'postCount' => $livePost
        ];

        return view('frontend.admin.stats.index', compact('stats'));
    }
}
