<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;
use Faker\Generator as Faker;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // Laravel 5.4の書き方　
    // $factory->define(App\Modles\Admin::class, function (Faker $faker) {
    //     // 現在時刻を取得
    //     $date = \Carbon\Carbon::now();
    //     return [
    //         // データをセット
    //         'admin_code' => $faker->randomNumber(),
    //         'name' => $faker->name,
    //         'password' => $faker->password,
    //         'role' => $faker->randomDigitNotNull
    //     ];
    // });

    // Laravel8.0ではこちらが正しい書き方
    public function definition()
    {
        return [
            // データをセット
            'admin_code' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'password' => $this->faker->password(),
            'role' => $this->faker->randomDigitNotNull(),
            'updated_at' => now(),
            'created_at' => now()
        ];
    }
}
