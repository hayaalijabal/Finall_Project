<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'Name' => $faker->word,
        'Email' =>$faker->word,
        'Password'=> $faker->word,
    ];
});
