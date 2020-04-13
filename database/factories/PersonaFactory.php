<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\personas;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(personas::class, function (Faker $faker) {
    return [
        'NombrePersona'=> $faker->name,
        'CedulaPersona'=> $faker->buildingNumber,
        'EmailPersona'=>  $faker->unique()->email,
    ];
    //$faker->numberbetween(1,4);
    //factory(App\personas::class)->times(2)->create();
});
