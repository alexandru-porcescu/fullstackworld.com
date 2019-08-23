<?php

namespace Tests\Unit;

use Tests\TestCase;
use Wink\WinkPost;

class PostModelTest extends TestCase
{
    /** @test
     *  @group models
     *  @group unit
     */
    public function create_a_post()
    {
        $title = $this->faker->title;

        $post = factory(WinkPost::class)->create(['title' => $title]);

        $this->assertEquals($post->title, $title);

        $this->assertDatabaseHas('posts', ['title' => $post->title]);
    }

    /** @test
     *  @group models
     *  @group unit
     */
    public function update_a_post()
    {
        $attributes = [
            'slug',
            'title',
            'body',
            'excerpt',
            'featured_image',
            'featured_image_caption',
        ];

        $post = factory(WinkPost::class)->create();
        $postMock = factory(WinkPost::class)->make();

        foreach ($attributes as $attribute) {
            $post->update([
                $attribute => $postMock->$attribute,
            ]);
            $this->assertEquals($post->$attribute, $postMock->$attribute);
        }

        $this->assertDatabaseHas('posts', ['title' => $postMock->title]);
    }

    /** @test
     *  @group models
     *  @group unit
     */
    public function delete_a_post()
    {
        $post = factory(WinkPost::class)->create();

        $post->delete();

        $this->assertDatabaseMissing('posts', ['title' => $post->title]);
    }
}
