<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Dashboard\Admin as DashboardAdmin;
use App\Models\dashboard\auth\Admin as AuthAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
       DB::table('admins')->delete();


      AuthAdmin::updateOrCreate(
            ['email' => 'admin@admin.com'], 
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
                // 'stage_id' => 1,
           
            ]
        );
    }
}
