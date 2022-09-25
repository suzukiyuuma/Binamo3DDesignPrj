<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CategoryName' => $this->faker->sentence(1,false), //単語数が１の文章を作成,
            'DelFlg' => '0'
        ];
    }
}
