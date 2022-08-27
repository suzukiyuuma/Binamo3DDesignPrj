<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserInfo::factory(10)->create();  
    }
}
