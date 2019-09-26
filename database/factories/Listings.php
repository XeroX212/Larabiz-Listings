<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listings;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Listings::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'name' => $faker->company,
        'address' => $faker->address,
        'website' => $faker->url,
        'email' => $faker->email,
        'phone' => $faker->randomNumber($nbDigits = NULL),
        'bio' => $faker->paragraph(3),
    ];
});
