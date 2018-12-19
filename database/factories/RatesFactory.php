<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Rate::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'product_id' => $faker->numberBetween($min = 1, $max = 50),
        'quantity' => $faker->randomDigit,
        'total' => $faker->randomDigit,
        
    ];
});
