<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SeachHead;
use Faker\Generator as Faker;

class SeachHeadFactory extends Factory
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
