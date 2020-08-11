<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Snow;
use Faker\Generator as Faker;

$factory->define(Snow::class, function (Faker $faker) {
    return [
        'min_snow'   =>  $faker->randomFloat(null, 0, 2),
        'max_snow'   =>  $faker->randomFloat(null, 0, 10),
        'weather_id'      => factory(App\Weather::class)
    ];
});
