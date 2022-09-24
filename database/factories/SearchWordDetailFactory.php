<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SearchWordDetail;
use App\Models\SearchHead;
use Faker\Generator as Faker;

class SearchWordDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'SearchID' => SearchHead::factory(),
            'SearchWord' => $this->faker->sentence(1,false), //単語数が１の文章を作成
            'DelFlg' => '0'
        ];
    }
}
