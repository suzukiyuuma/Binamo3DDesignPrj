<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SearchFormatDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SearchFormatDetail::factory(10)->create();
    }
}
