<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SearchHead;
use Faker\Generator as Faker;

class SearchHeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'DelFlg' => '0'
        ];
    }
}
