<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AboutMe;
use Faker\Generator as Faker;

$factory->define(AboutMe::class, function (Faker $faker) {
    return [
        //  'mobile' => $faker->phoneNumber
        'name' => $faker->name,
        'sex' => $faker->randomElement([0,1]),
        'birthday' => $faker->date()
    ];
});
