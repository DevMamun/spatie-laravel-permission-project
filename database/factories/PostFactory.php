<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text($maxNbChars = 30),
        'body' => $faker->text($maxNbChars = 120)
        // 'body' => $faker->text($maxNbChars = 50)
    ];
});
