<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Koukoku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Koukoku::factory(10)->create();
    }
}
