<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {

    $city = $faker->city;

    return [
        'city_code'     => strtoupper(substr($city, 0, 3)),
        'name'          => $city,
        'is_capital'    => $faker->numberBetween(0,1),
        'country_id'    => factory(App\Country::class)
    ];
});
