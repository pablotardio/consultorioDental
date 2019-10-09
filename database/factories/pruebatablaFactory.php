<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\pruebatabla;
use Faker\Generator as Faker;

$factory->define(pruebatabla::class, function (Faker $faker) {

    return [
        'hola' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
