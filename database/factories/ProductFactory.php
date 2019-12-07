<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'code' => $faker->randomNumber($nbDigits = 5, $strict = true),
      'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'cost_exgst' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 20000),
      'cost_incgst' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 20000)
    ];
});
