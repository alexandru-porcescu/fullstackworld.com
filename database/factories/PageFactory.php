<?php

use Faker\Generator as Faker;

$factory->define(\Wink\WinkPage::class, function (Faker $faker) {
    return [
        'id' => (string) \Illuminate\Support\Str::uuid(),
        'slug' => $faker->slug,
        'title' => $faker->title,
        'body' => $faker->text,
    ];
});
