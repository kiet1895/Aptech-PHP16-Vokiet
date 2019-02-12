<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'hang' => $faker->name,
        'loai ve' => $faker->unique()->safeEmail,
        'khoi hanh' => $faker->khoihanh,
        'ha canh' => $faker->hacanh,
        'ngay di' => new Date,
        'gio bay' => new Time,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
