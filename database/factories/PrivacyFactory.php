<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Privacy;
use Faker\Generator as Faker;

class PrivacyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'PrivacyJoukouTitle' => $this->faker->realText(10),//プライバシータイトルを10文字で作成
            'PrivacyJoukouNaiyou' => $this->faker->realText(50),//プライバシー条項を50文字で作成
            'DelFlg' => '0'
        ];
    }
}
