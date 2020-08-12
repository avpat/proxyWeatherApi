<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Temperature;
use Faker\Generator as Faker;

$factory->define(Temperature::class, function (Faker $faker) {
    return [
        'min_temp'   =>  $faker->randomFloat(2, -20, 30),
        'max_temp'   =>  $faker->randomFloat(2, 0, 40),
        'weather_id' => App\Weather::all()->random()->id
    ];
});
