<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\usuario_domicilio;
use App\usuario_domicilio2;
use Faker\Generator as Faker;

$factory->define(usuario_domicilio2::class, function (Faker $faker) {
    return [
        'domicilio' => $faker->streetAddress,
        'numero_exterior' => $faker->buildingNumber,
        'colonia' => $faker->citySuffix,
        'cp' => $faker->buildingNumber,
        'ciudad' => $faker->city,
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

$factory->define(usuario_domicilio::class, function (Faker $faker) {
    return [
        'domicilio' => $faker->streetAddress,
        'numero_exterior' => $faker->buildingNumber,
        'colonia' => $faker->citySuffix,
        'cp' => $faker->buildingNumber,
        'ciudad' => $faker->city,
    ];
});