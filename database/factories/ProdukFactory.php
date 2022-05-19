<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {
    $randomNumber = rand(10, 20);
    $image = "hoodie.png";
    return [
        'nama' => $faker->name,
        'model' => 'hoodie',
        'harga' => $faker->numberBetween(100000, 1000000),
        'quantity' => $faker->numberBetween(3, 40),
        'files' => $image,

    ];
});
