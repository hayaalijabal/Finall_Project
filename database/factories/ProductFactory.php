<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'Image' => 'products/Image/img.jpg',
        'Name'=>$faker->name,
        'CategoryID' => \App\Category::all()->random(),
        'Price' =>$faker->randomNumber(),
        'Description'=> $faker->text,

    ];
});
