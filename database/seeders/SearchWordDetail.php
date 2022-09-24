<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SearchWordDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SearchWordDetail::factory(10)->create(); 
    }
}
