<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listings;
use Faker\Generator as Faker;

$factory->define(App\Listings::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'name' => $faker->title,
        'address' => $faker->address,
        'website' => $faker->url,
        'email' => $faker->email,
        'phone' => $faker->randomNumber($nbDigits = NULL),
        'bio' => $faker->paragraph(3),
    ];
});
