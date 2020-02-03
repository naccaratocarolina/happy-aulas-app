<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    return [
        'session_date_time'=>$faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
        'price'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 10.00, $max = 40.00),
        'teacher_id'=>$faker->numberBetween($min = 1, $max = 100),
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
    ];
});
