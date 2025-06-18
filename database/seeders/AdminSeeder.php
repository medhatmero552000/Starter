<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Dashboard\Admin as DashboardAdmin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
       DashboardAdmin::truncate();

       DashboardAdmin::updateOrCreate(
            ['email' => 'admin@admin.com'], 
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}
