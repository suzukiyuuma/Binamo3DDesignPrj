<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KiyakuKbnM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\KiyakuKbnM::factory(10)->create();
    }
}
