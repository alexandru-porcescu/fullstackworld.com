<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Wink\WinkPost as WinkPostOriginal;

class WinkPost extends WinkPostOriginal
{
    use Searchable;

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
            'excerpt' => $array['excerpt'],
            'body' => $array['body'],
            'featured_image' => $array['featured_image'],
        ];

        return $data;
    }
}
