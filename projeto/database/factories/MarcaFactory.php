<?php

use Faker\Generator as Faker;

$factory->define(App\Marca::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'site' => $faker->url,
        'logo' => $faker->imageUrl($width = 640, $height = 480)

    ];
});
