<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Wink\WinkAuthor;

class AuthorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $author = factory(WinkAuthor::class)->create();
        dd($author);
        $this->assertTrue(true);
    }
}
