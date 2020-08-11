<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Air;
use Faker\Generator as Faker;

/**
 * assuming humidity will have low, high and med value
 */
$factory->define(Air::class, function (Faker $faker) {
    return [
        'humidity'      => $faker->randomElement(['high', 'medium', 'low']),
        'weather_id'    => factory(App\Weather::class)
    ];
});
