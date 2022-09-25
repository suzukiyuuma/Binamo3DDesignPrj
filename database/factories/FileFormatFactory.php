<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FileFormat;
use Faker\Generator as Faker;

class FileFormatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ContentFileFormat' => $this->faker->numberBetween(1, 7),
            'DelFlg' => '0'
        ];
    }
}
