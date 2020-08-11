<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'city_code'     => $faker->citySuffix,
        'name'          => $faker->city,
        'is_capital'    => $faker->numberBetween(0,1),
        'country_id'    => factory(App\Country::class)
    ];
});
