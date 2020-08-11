<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wind;
use Faker\Generator as Faker;

$factory->define(Wind::class, function (Faker $faker) {
    return [
        'wind_speed'   =>  $faker->randomFloat(null, 0, 100),
        'wind_direction'   =>  $faker->randomElement(['east', 'west', 'south', 'north']),
        'weather_id'      => factory(App\Weather::class)
    ];
});
;
