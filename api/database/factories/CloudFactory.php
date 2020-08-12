<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cloud;
use Faker\Generator as Faker;

$factory->define(Cloud::class, function (Faker $faker) {
    return [
        'cover'         => $faker->randomElement(['high', 'medium', 'low', 'clear']),
        'weather_id'      => App\Weather::all()->random()->id
    ];
});
