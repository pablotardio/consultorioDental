<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\cita;
use Faker\Generator as Faker;

$factory->define(cita::class, function (Faker $faker) {

    return [
        'fecha' => $faker->word,
        'hora_inicio' => $faker->word,
        'hora_fin' => $faker->word,
        'Odontologo' => $faker->randomDigitNotNull,
        'Paciente' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
