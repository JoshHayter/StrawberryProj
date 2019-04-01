<?php

use App\Tune;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Tune::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'length' => $faker->numberBetween($min = 100, $max = 300),
        'price' => $faker->numberBetween($min = 50, $max = 200),
        'imageUrl' => $faker->imageUrl($width = 1600, $height = 1600),
    ];
});
