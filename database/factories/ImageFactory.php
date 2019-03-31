<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'file_name' => $faker->word,
        'file_ext' => $faker->randomElement(['jpg', 'png', 'gif'])
    ];
});
