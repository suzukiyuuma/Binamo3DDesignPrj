<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SearchCategoryDetail;
use App\Models\SearchHead;
use App\Models\CategoryM;
use Faker\Generator as Faker;

class SearchCategoryDetailFactory extends Factory
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
            'SearchCategory' => CategoryM::factory(),
            'DelFlg' => '0'
        ];
    }
}
