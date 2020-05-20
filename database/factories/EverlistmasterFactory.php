<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Everlistmaster::class, function (Faker $faker) {
    return [
        'name' => $faker->name(rand(1, 3)),
        'ownername' => $faker->name(rand(1, 3)),
        'phno' => $faker->phonenumber(rand(1,9)),
        'address' => $faker->address(rand(1,5)),
        'user_id' => App\User::pluck('id')->random(),
        'everlisttype_id' => App\Everlisttype::pluck('id')->random(),
    ];
});
