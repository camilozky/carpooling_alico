<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {
    return [
        'nameDriver' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phoneNumber' => $faker->phoneNumber,
        'datePickup' => $faker->unique()->dateTimeBetween('now', '+10 days'),
        'timePickup' => $faker->time($format = 'H:i:s'),
        'placePickup' => $faker->address,
        'placeDropoff' => $faker->address,
        'seats' => $faker->numberBetween($min = 1, $max = 4),
        'meetingPlace' => $faker->address,
        'places' => $faker->address,
        'passengerName' => $faker->name,
        'emailPassenger' => $faker->unique()->safeEmail,
        'phonenumberPassenger' => $faker->phoneNumber,
    ];
});
