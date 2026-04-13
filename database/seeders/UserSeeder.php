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
            'name' => 'Umar Putra',
            'slug' => 'umar-putra',
            'email' => 'umar@admin.com',
            'username' => 'umar',
            'role' => 'admin',
            'password' => bcrypt('adminbaikhati')
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
