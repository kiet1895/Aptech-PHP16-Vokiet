<?php

use Faker\Generator as Faker;

$factory->define(App\ChuyenBay::class, function (Faker $faker) {
    return [
        //
        'hang' => $faker->name,
        'loai ve' => $faker->unique()->safeEmail,
        'khoi hanh' => $faker->city,
        'ha canh' => $faker->city,
        'ngay di' => $faker->date($format = 'Y-m-d', $max = '2019-2-20'),
        'gio bay' => $faker->time($format = 'h:m:s'),
    ];
});
