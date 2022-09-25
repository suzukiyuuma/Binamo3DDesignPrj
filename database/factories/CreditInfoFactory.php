<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CreditInfo;
use App\Models\UserInfo;
use Faker\Generator as Faker;

class CreditInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        

        return [
            'UserID' => UserInfo::factory(),
            'CardNumber' => $this->faker->CreditCardNumber(),
            'CardLimitDate' => $this->faker->DateTimeBetween('2025','+3year')->format('Y-m'),
            'SequlityCode' => $this->faker->NumberBetween(100, 9999),
            'CardName' => 'SUZUKI',
            'DelFlg' => '0'
            // ここはSeederで標準で作ってくれるのでいらない。
            // 'RegistDate' => now(),
            // 'UpdateDate' => now()
        ];
    }
}
