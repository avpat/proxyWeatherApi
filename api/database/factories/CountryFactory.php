<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    $country = $faker->country;

    return [
        'code'          =>  strtoupper(substr($country, 0, 2)),
        'name'          =>  $country,
        'weather_id'    =>  factory(App\Weather::class)
    ];
});
