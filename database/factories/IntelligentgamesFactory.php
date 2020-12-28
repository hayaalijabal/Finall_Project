<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Inelligentgames::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'CategoryID' => \App\Category::all()->random(),
        //'image' => 'inelligentgames/image/img.jpg',
        'Description'=> $faker->word,
    ];
});
