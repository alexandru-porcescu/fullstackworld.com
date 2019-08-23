<?php

namespace Tests\Unit;

use Tests\TestCase;
use Wink\WinkPage;

class PageModelTest extends TestCase
{
    /** @test
     *  @group models
     *  @group unit
     */
    public function create_a_page()
    {
        $title = $this->faker->title;

        $page = factory(WinkPage::class)->create(['title' => $title]);

        $this->assertEquals($page->title, $title);

        $this->assertDatabaseHas('pages', ['title' => $page->title]);
    }

    /** @test
     *  @group models
     *  @group unit
     */
    public function update_a_page()
    {
        $attributes = [
            'slug',
            'title',
            'body',
            'meta',
        ];

        $page = factory(WinkPage::class)->create();
        $pageMock = factory(WinkPage::class)->make();

        foreach ($attributes as $attribute) {
            $page->update([
                $attribute => $pageMock->$attribute,
            ]);
            $this->assertEquals($page->$attribute, $pageMock->$attribute);
        }

        $this->assertDatabaseHas('pages', ['title' => $pageMock->title]);
    }

    /** @test
     *  @group models
     *  @group unit
     */
    public function delete_a_page()
    {
        $page = factory(WinkPage::class)->create();

        $page->delete();

        $this->assertDatabaseMissing('pages', ['title' => $page->title]);
    }
}
