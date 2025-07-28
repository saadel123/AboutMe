<?php

namespace Database\Seeders;

// database/seeders/SettingsTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings')->insert([
            'data' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
