<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\horario;
use Faker\Generator as Faker;

$factory->define(horario::class, function (Faker $faker) {

    return [
        'dia' => $faker->word,
        'hora_inicio' => $faker->word,
        'hora_fin' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
