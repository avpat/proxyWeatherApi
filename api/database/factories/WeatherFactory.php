<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Weather;
use Faker\Generator as Faker;

$factory->define(Weather::class, function (Faker $faker) {
    return [
       'forecast_period' =>  $faker->randomElement(['1 week', '2 weeks', '3 weeks']),
        'source'         =>  $faker->randomElement(['bbc', 'openweather', 'radio'])
    ];
});
