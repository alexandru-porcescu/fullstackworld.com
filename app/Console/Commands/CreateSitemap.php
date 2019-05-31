<?php

namespace App\Console\Commands;

use Wink\WinkTag;
use Carbon\Carbon;
use Wink\WinkPage;
use Wink\WinkPost;
use App\Mail\CommandFinished;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;

class CreateSitemap extends Command
{
    protected $signature = 'sitemap:create';

    protected $description = 'Create Sitemap';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $sitemap = App::make('sitemap');

        $sitemap->add(URL::to('/'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(URL::to('/blog'), Carbon::now(), '1.0', 'weekly');

        $tags = WinkTag::all();

        foreach ($tags as $tag) {
            $sitemap->add(URL::to($tag->slug), Carbon::now(), '0.9', 'weekly');
        }

        $posts = WinkPost::live()->get();

        foreach ($posts as $post) {
            $sitemap->add(URL::to('post/'.$post->slug), Carbon::now(), '0.9', 'weekly');
        }

        $pages = WinkPage::get();

        foreach ($pages as $page) {
            $sitemap->add(URL::to('page/'.$page->slug), Carbon::now(), '0.9', 'weekly');
        }

        $sitemap->store('xml', 'sitemap');

        Mail::to('mhetreramesh@gmail.com')->send(new CommandFinished($this->signature));

        $this->info('Sitemap created!');
    }
}
