<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'seller' => 1,
        'title' => $faker->words($nb = 2, $asText = true),
        'short_description' => $faker->paragraph,
        'description' => $faker->paragraphs($nb = 3, $asText = true),
        'price' => $faker->numberBetween($min = 1, $max = 9) . $faker->randomElement($array = array (0,5)) . $faker->randomElement($array = array ('000','000000'))
    ];
});
