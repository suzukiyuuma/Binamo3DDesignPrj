<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Kiyaku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Kiyaku::factory(10)->create();
    }
}
