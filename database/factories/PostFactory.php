<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'media_path' => $faker->imageUrl(),
        'description' => $faker->sentence(),
        'vote' => $faker->randomDigit,
    ];
});
