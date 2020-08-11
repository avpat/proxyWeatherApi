<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rain;
use Faker\Generator as Faker;

$factory->define(Rain::class, function (Faker $faker) {
    return [
        'precipitation'   =>  $faker->randomFloat(0, 0, 200),
        'weather_id'      =>  factory(App\Weather::class)
    ];
});
