<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
              'name' => $faker->company,
              'email' => $faker->unique()->safeEmail,
              'abn' => $faker->randomNumber($nbDigits = 5, $strict = false),
              'street' => $faker->streetAddress,
              'suburb' => $faker->city,
              'contact' => $faker->name($gender = null) ,
              'contact_phone' => $faker->phoneNumber,
              'contact_mobile' => $faker->phoneNumber,
              'contact_email' => $faker->email,

    ];
});
