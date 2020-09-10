<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Card::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10)
    ];
});
