<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::updateOrCreate(['email' => 'admin@admin.com'], [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'type' => 'super_admin',
        ]);
    }
}
