<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini
use Illuminate\Support\Facades\Hash; // Tambahkan ini

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'), // Menggunakan bcrypt untuk hashing password
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //
    }
}
