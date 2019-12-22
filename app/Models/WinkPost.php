<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;
use CyrildeWit\EloquentViewable\Viewable;
use Laravel\Scout\Searchable;
use Wink\WinkPost as WinkPostOriginal;

class WinkPost extends WinkPostOriginal implements ViewableContract
{
    use Searchable, Viewable;

    public function getScoutKey()
    {
        return $this->id;
    }

    public function shouldBeSearchable()
    {
        return $this->published;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $data = [
            'id' => $array['id'],
            'slug' => $array['slug'],
            'title' => $array['title'],
            'excerpt' => substr($array['excerpt'], 0, 2000),
            'body' => $array['body'],
            'featured_image' => $array['featured_image'],
        ];

        return $data;
    }

    public static function getPostsByTag($tagSlug, $limit = 6)
    {
        return self::whereHas('tags', function ($query) use ($tagSlug) {
            $query->where('slug', $tagSlug);
        })
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit($limit)
            ->get();
    }
}
