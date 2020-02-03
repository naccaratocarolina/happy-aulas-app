<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use App\User;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'bio' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'user_id' => $faker->unique()->numberBetween($min = 1, $max = 100),
    ];
});
