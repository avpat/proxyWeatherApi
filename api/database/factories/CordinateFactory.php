<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cordinate;
use Faker\Generator as Faker;

$factory->define(Cordinate::class, function (Faker $faker) {
    return [
        'longitude'     => $faker->longitude,
        'latitude'      => $faker->latitude,
        'weather_id'    => App\Weather::all()->random()->id
    ];
});
