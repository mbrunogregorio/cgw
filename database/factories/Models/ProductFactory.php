<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'image' => $faker->word,
        'description' => $faker->text,
        'category_id' => factory(\App\Models\Category::class),
    ];
});
