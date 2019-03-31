<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'ip' => $faker->numberBetween(1000000,9999999),
        'author' => $faker->name,
        'comment' => $faker->sentence,
        'flag' => $faker->randomElement(['0', '1']),
    ];
});
