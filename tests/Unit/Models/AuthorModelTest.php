<?php

namespace Tests\Unit;

use Tests\TestCase;
use Wink\WinkAuthor;

class AuthorModelTest extends TestCase
{
    /** @test
     *  @group models
     *  @group unit
     */
    public function create_an_author()
    {
        $name = $this->faker->name;

        $author = factory(WinkAuthor::class)->create(['name' => $name]);

        $this->assertEquals($author->name, $name);

        $this->assertDatabaseHas('authors', ['email' => $author->email]);
    }

    /** @test
     *  @group models
     *  @group unit
     */
    public function update_an_author()
    {
        $attributes = [
            'slug',
            'name',
            'email',
            'bio',
            'meta',
        ];

        $author = factory(WinkAuthor::class)->create();
        $authorMock = factory(WinkAuthor::class)->make();

        foreach ($attributes as $attribute) {
            $author->update([
                $attribute => $authorMock->$attribute,
            ]);
            $this->assertEquals($author->$attribute, $authorMock->$attribute);
        }

        $this->assertDatabaseHas('authors', ['email' => $authorMock->email]);
    }

    /** @test
     *  @group models
     *  @group unit
     */
    public function delete_an_author()
    {
        $author = factory(WinkAuthor::class)->create();

        $author->delete();

        $this->assertDatabaseMissing('authors', ['email' => $author->email]);
    }
}
