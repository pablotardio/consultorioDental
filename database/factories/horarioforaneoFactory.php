<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\horarioforaneo;
use Faker\Generator as Faker;

$factory->define(horarioforaneo::class, function (Faker $faker) {

    return [
        'llaverecep' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
