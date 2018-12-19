<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'product_id' => $faker->numberBetween($min = 1, $max = 50),
        'content' => $faker->realText(180),
    ];
});
