<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->name,
        'short_text' => $faker->sentence,
        'text' => $faker->randomHtml(2,3),
        'tags' => $faker->words(range(2,5), true),
        'owner_id' => $faker->randomNumber,
        'active' => $faker->numberBetween(0,1),
    ];
});
