<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->word,
        'link' => $faker->word,
        'embed' => $faker->text,
    ];
});
