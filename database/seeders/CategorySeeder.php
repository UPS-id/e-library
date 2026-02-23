<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
            'name' => 'Novel',
            'slug' => 'novel'
            ],

            [
            'name' => 'Comic',
            'slug' => 'comic'
            ],

            [
            'name' => 'History',
            'slug' => 'history'
            ],

            [
            'name' => 'Biography',
            'slug' => 'biography'
            ],
        ]);
    }
}
