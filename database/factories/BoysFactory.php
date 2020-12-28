<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Boys::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        //'image' => 'boys/image/img.jpg',
        'CategoryID' => \App\Category::all()->random(),
        'Description'=> $faker->word,


    ];
});
