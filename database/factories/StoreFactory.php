<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Store::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->sentence($nbWords = 3, $variableNbWords = true),
        'register' => $faker->unique()->numerify('##############'),
        'company_name' => $faker->unique()->company,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'prefix' => $faker->unique()->lexify('???'),
        'slug' => $faker->slug,
        'public_place' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'complement' => $faker->secondaryAddress,
        'district' => $faker->citySuffix,
        'city' => $faker->city,
        'country' => $faker->state,
        'postal_code' => $faker->numerify('########'),
        'phone' => $faker->e164PhoneNumber,
        'mobile_phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'delivery_fee' => $faker->randomFloat(2, 1, 5)
    ];
});
