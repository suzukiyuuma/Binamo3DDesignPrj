<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FileFormat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\FileFormat::factory(10)->create();
    }
}
