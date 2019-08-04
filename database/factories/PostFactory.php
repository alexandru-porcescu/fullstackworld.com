<?php

use Faker\Generator as Faker;

$factory->define(\Wink\WinkPost::class, function (Faker $faker) {
    return [
        'id' => (string) \Illuminate\Support\Str::uuid(),
        'slug' => $faker->slug,
        'title' => $faker->title,
        'excerpt' => $faker->title,
        'body' => $faker->text,
        'published' => 1,
        'featured_image' => $faker->imageUrl(),
        'featured_image_caption' => $faker->title,
        'author_id' => factory(\Wink\WinkAuthor::class)->create()->id,
    ];
});
