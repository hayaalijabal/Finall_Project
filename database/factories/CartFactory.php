<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Cart::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'CategoryID' => \App\Category::all()->random(),
        //'image' => 'carts/image/img.jpg',
        'ProductsID' =>\App\Product::all()->random(),
        'Category' =>$faker->word,
        'Price'=> $faker->randomNumber(),
        'Count'=> $faker->randomNumber(),
    ];
});
