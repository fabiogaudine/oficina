<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->realText(rand(80, 600)),
        'release_date'  => $faker->date(),
        'rating' => rand(1,5),
        'genre_id' => function () {
            // Get random genre id
            return App\Models\Genre::inRandomOrder()->first()->id;
        },
        'photo'  => 'https://via.placeholder.com/350x150',
        'slug'   => str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($faker->sentence(5))))),
    ];
});
