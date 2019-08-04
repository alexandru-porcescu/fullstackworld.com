<?php

use Faker\Generator as Faker;

$factory->define(\Wink\WinkAuthor::class, function (Faker $faker) {
    return [
        'id' => (string) \Illuminate\Support\Str::uuid(),
        'name' => $faker->name,
        'slug' => $faker->slug,
        'bio' => $faker->text,
        'email' => $faker->email,
        'password' => \Illuminate\Support\Facades\Hash::make($faker->password),
    ];
});
