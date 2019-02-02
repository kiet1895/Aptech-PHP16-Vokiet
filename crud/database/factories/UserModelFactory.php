<?php

use Faker\Generator as Faker;

$factory->define(App\UserModel::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
