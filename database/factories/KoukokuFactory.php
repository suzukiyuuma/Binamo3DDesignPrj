<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Koukoku;
use Faker\Generator as Faker;

class KoukokuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'KoukokuName' => $this->faker->realText(10),//広告名を10文字で作成
            'JanruKbn' => $this->faker->realText(6),//ジャンルを6文字で作成
            'AnimationURL' => $this->faker->url(),//動画URL作成
            'DetailURL' => $this->faker->url(),//詳細リンクURL作成
            'KoukokuContent' => $this->faker->realText(15),//広告詳細の内容を15文字で作成
            'ShowTimes' => $this->faker->radomNumber(6),//表示回数を最大６桁の数値で作成
            'DtlBtnClickTimes' => $this->faker->radomNumber(5),//詳細ボタンクリック回数を最大5桁の数値で作成
            'ShowFlg' => '0',
            'DelFlg' => '0'
        ];
    }
}
