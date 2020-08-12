<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tip;
use Faker\Generator as Faker;

$factory->define(Tip::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->text,
    ];
});
