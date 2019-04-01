<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->name,
        'slug' => str_slug($name),
        'description' => $faker->sentence(30),
        'finished'=> true
    ];
});
