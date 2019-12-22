<?php

namespace App\Http\Controllers\Admin;

use Analytics;
use App\Http\Controllers\Controller;
use Spatie\Analytics\Period;
use Wink\WinkPost;

class StatsController extends Controller
{
    public function index()
    {
        if (! auth('wink')->check()) {
            return redirect()->route('wink.auth.login');
        }

        $livePost = WinkPost::with('tags')
            ->live()
            ->count();

        $gaLastOneMonth = Analytics::fetchTotalVisitorsAndPageViews(Period::days(30));

        $analyticsData = Analytics::performQuery(
            Period::years(1),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions, ga:pageviews, ga:users',
                'dimensions' => 'ga:yearMonth',
            ]
        );

        $gaMostVisitedPages = Analytics::fetchMostVisitedPages(Period::months(3), 20);

        $gaTopReferences = Analytics::fetchTopReferrers(Period::months(3), 20);

        $stats = [
            'postCount' => $livePost,
            'analytics' => $analyticsData->rows,
            'gaLastOneMonth' => $gaLastOneMonth,
            'gaCurrentMonth' => last($analyticsData->rows),
            'gaMostVisitedPages' => $gaMostVisitedPages,
            'gaTopReferences' => $gaTopReferences,
        ];

        return view('frontend.admin.stats.index', compact('stats'));
    }
}
