<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Slide;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'link' => $faker->word,
        'description' => $faker->text,
        'image' => $faker->word,
    ];
});
