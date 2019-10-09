<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\paciente;
use Faker\Generator as Faker;

$factory->define(paciente::class, function (Faker $faker) {

    return [
        'ci' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'apellido_paterno' => $faker->word,
        'apellido_materno' => $faker->word,
        'correo' => $faker->word,
        'direccion' => $faker->word,
        'telefono' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
