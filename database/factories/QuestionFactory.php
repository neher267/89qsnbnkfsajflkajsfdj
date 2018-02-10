<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'subject' => 'english',
        'category_id' => rand(1,2),
        'question' => $faker->sentence.'?',
        'ans' => 1,
        'weight' => rand(0,10)
    ];
});

