<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\pruebatest;
use Faker\Generator as Faker;

$factory->define(pruebatest::class, function (Faker $faker) {

    return [
        'llave' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
