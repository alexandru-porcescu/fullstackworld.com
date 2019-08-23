<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Wink\WinkTag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.layouts.right-side.tags', function ($view) {
            $tags = WinkTag::withCount('posts')->orderBy('name', 'DESC')->get();
            $view->with('tags', $tags);
        });
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
