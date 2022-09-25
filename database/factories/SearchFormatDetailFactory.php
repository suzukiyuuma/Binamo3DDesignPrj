<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SearchFormatDetail;
use App\Models\SearchHead;
use App\Models\FileFormat;
use Faker\Generator as Faker;

class SearchFormatDetailFactory extends Factory
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
            'SearchFormat' => FileFormat::factory(),
            'DelFlg' => '0'
        ];
    }
}
