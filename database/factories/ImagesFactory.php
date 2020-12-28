<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Image::class, function (Faker $faker) {

    $imageables =[
      \App\Product::class,
      \App\User::class,
    ];

    $imageableType = $faker->randomElement($imageables);
    $imageable = factory($imageableType)->create();

    return [
        'Url'=> $faker-> url.'image.jpg',
        'imageable_type'=>$imageableType,
        'imageable_id'=>$imageable->id,
    ];
});
