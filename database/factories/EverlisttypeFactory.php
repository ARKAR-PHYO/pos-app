<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Everlisttype::class, function (Faker $faker) {
    return [
        'everlisttype' => rtrim($faker->sentence(rand(1, 3)), ".")
    ];
});
