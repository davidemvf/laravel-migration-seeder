<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Place;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'name' => $faker -> streetName,
        'address' => $faker -> address,
        'city' => $faker -> city,
        'nation' => $faker -> state
    ];
});
