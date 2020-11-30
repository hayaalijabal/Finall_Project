<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Boys::class, function (Faker $faker) {
    return [
        'Code' => $faker->randomNumber(),
        'CategoryID' => \App\Category::all()->random(),
        'Price' =>$faker->randomNumber(),
        'Description'=> $faker->word,


    ];
});
