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
}
