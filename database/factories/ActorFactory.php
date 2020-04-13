<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\actors;
use Faker\Generator as Faker;

$factory->define(actors::class, function (Faker $faker) {
    return [
        'NombreActor'=> $faker->sentence(2,false),
    ];
});
