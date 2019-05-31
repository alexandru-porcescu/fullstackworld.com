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

        return view('frontend.pages.index', compact('page'));
    }
}
