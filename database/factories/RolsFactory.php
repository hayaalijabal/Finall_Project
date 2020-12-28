<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Roles::class, function (Faker $faker) {
    return [
        'Name' => $faker->word
    ];
});
