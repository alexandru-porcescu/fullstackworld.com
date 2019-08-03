<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\Wink\WinkAuthor::class, function (Faker $faker) {
    return [
        'id' => (string) \Illuminate\Support\Str::uuid(),
        'name' => 'Regina Phalange',
        'slug' => 'regina-phalange',
        'bio' => 'This is me.',
        'email' => 'admin@mail.com',
        'password' => \Illuminate\Support\Facades\Hash::make($password = str_random()),
    ];
});
