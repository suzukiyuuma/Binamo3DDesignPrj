<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SearchCategoryDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SearchCategoryDetail::factory(10)->create();
    }
}
