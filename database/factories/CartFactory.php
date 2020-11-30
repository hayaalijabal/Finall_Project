<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Cart::class, function (Faker $faker) {
    return [
        'Code' => $faker->randomNumber(),
        'CategoryID' => \App\Category::all()->random(),
        'Category' =>$faker->word,
        'Price'=> $faker->randomNumber(),
        'Count'=> $faker->randomNumber(),
    ];
});
