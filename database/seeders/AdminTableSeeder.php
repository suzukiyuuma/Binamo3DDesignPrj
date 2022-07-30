<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Database\Eloquent\Factory;
use Binamo3DDesignPrj/app/Models/Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory()->count(15)->create();
    }
}
