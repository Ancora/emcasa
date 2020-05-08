<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->numerify('PREF######'),
        'name' => $faker->unique()->sentence($nbWords = 3, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'size' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'slug' => $faker->slug,
        'price' => $faker->randomFloat(2, 1, 8),
        'discount' => $faker->randomFloat(2, 1, 8),
        'discount_percentage' => $faker->randomFloat(2, 1, 5),
        'quantity' => $faker->randomNumber,
        'delivery_fee' => $faker->randomFloat(2, 1, 5)
    ];
});
