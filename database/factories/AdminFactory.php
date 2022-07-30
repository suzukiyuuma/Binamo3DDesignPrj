<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Admin;
use Faker\Generator as Faker;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(App\Admin::class, function (Faker $faker) {
        // 現在時刻を取得
        $date = \Carbon\Carbon::now();
        return [
            // データをセット
            'admin_code' => $faker->randomNumber(),
            'name' => $faker->name,
            'password' => $faker->password,
            'role' => $faker->randomDigitNotNull
        ];
    });
}
