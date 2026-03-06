<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'Umar Sudirman',
            'slug' => 'umar-sudirman',
            'email' => 'umarsudirman@gmail.com',
            'username' => 'umarsudirman',
            'role' => 'user',
            'password' => bcrypt('Uhuy123')
        ]);
    }
}
