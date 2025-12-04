<?php

namespace Database\Seeders;

use App\Models\LevelUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LevelUser::insert([
        ['id' => 1, 'level_name' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
        ['id' => 2, 'level_name' => 'User', 'created_at' => now(), 'updated_at' => now()],
    ]);
    }
}
