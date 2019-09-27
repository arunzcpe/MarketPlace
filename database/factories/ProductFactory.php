<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,5),
        'title' => $faker->name,
        'body' => $faker->text,
        'price' => rand(200,1000),
        'category' => $faker->randomElement(['mobile','electronic','furniture','fashion'])
    ];
});
