<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KiyakuKbnM;
use Faker\Generator as Faker;

class KiyakuKbnMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CategoryName' => $this->faker->realText(6),//規約区分名を6文字で作成
            'DelFlg' => '0'
        ];
    }
}
