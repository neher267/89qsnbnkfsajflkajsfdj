<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'subject_id' => 1,
        'category_id' => rand(0,3),
        'question' => $faker->sentence,
        'ans' => rand(0,2),
        'weight' => rand(0,10)
    ];
});

