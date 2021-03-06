<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->name,
        'slug' => str_slug($name),
        'price' => 1000,
        'description' => $faker->sentence(40),
        'gender' => $faker->randomElement(['u', 'm', 'f']),
        'finished'=> true
    ];
});
