<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->safeColorName,
    	'parent_id' => $faker->randomNumber,
    	'sortorder' => $faker->numberBetween(0,100),
    	'active' => $faker->numberBetween(0,1),
    	'updated_at' => $faker->dateTime
    ];
});
