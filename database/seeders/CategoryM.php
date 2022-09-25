<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CategoryM::factory(10)->create();
    }
}
