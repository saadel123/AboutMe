<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',  // Change this if you want a specific email
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('admin1234'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
