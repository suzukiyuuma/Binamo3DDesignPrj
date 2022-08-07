<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Database\Eloquent\Factory;
// use ../../App/Models/Admin;
// use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin::factory()->count(15)->create();
        \App\Models\Admin::factory(10)->create();  
    }
}
