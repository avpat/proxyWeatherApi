<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'city_id' => factory(App\City::class),
        'country_id' => factory(App\Country::class),
        'cordinate_id' => factory(App\Cordinate::class),
    ];
});

