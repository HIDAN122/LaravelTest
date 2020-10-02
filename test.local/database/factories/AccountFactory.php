<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Models\Account::class, function (Faker $faker) {
    $name = $faker->name;
    $balance = rand(1000, 10000);
    $createdAt = $faker->dateTimeBetween('-3 month', '-2 month');
    $data = [
        'name' => $name,
        'user_id' => (rand(1, 10)),
        'balance' => $balance,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];
    return $data;
});
