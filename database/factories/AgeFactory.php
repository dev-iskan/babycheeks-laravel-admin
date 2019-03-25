<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Age::class, function (Faker $faker) {
    return [
        'age' => $faker->word
    ];
});
