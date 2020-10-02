<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Account::class, function (Faker $faker) {
    $randRah = rand(1,100);
    $balance = rand(1000, 10000);
    $createdAt = $faker->dateTimeBetween('-3 month', '-2 month');
    $data = [
        'name' => 'Рахунок #'.$randRah,
        'en_name'=>'Rahunok #'.$randRah,
        'user_id' => (rand(1, 2)),
        'balance' => $balance,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];
    return $data;//
});
