<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\odontologo;
use Faker\Generator as Faker;

$factory->define(odontologo::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'apellido_paterno' => $faker->word,
        'apellido_materno' => $faker->word,
        'correo' => $faker->word,
        'direccion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
