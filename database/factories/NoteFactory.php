<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\Note::class, function (Faker $faker) {
    return [
        'card_id' => factory(\App\Card::class)->create()->id,
        'user_id' => factory(\App\User::class)->create()->id,
        'body' => $faker->paragraph(1)
    ];
});
