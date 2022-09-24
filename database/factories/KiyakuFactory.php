<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KiyakuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'KiyakuKbn' => UserInfo::factory(),
            'KiyakuTitle' => $this->faker->realText(10),//規約タイトルを10文字で作成
            'KiyakuNaiyou' => $this->faker->realText(50),//規約内容を50文字で作成
            'DelFlg' => '0'
        ];
    }
}
