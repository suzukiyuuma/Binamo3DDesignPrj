<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreditInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CreditInfo::factory(10)->create();  
    }
}
