<?php

namespace App\Http\Controllers;

use Wink\WinkPage;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = WinkPage::where('slug', $slug)->first();

        if (! $page) {
            return abort(404);
        }

        // Add 60 minutes delay page view entry
        views($page)->delayInSession(60)->record();

        return view('frontend.pages.index', compact('page'));
    }
}
