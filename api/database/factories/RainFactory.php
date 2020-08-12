<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rain;
use Faker\Generator as Faker;

$factory->define(Rain::class, function (Faker $faker) {
    return [
        'precipitation'   =>  $faker->randomFloat(0, 0, 10),
        'weather_id'      => App\Weather::all()->random()->id
    ];
});
