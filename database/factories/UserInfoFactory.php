<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserInfo;
use Faker\Generator as Faker;

class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'UserID' => str_pad($this->faker->NumberBetween(0, 99999999), 8, 0, STR_PAD_LEFT),
            'UserName' => $this->faker->name(),
            'Password' => $this->faker->password(6, 15),
            'UserKind' => $this->faker->NumberBetween(1, 4),
            'OldPassword' =>  $this->faker->password(6, 15),
            'DelFlg' => '0'
            // ここはSeederで標準で作ってくれるのでいらない。
            // 'RegistDate' => now(),
            // 'UpdateDate' => now()
        ];
    }
}
