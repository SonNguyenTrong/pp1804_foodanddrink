<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' =>  $faker->firstName,
        'images' => $faker->imageUrl($width = 200, $height = 200),
        'description' => $faker->realText(180),
        'prise' => $faker->randomDigit,
        'quantity' => $faker->randomDigit,
        ];
});
