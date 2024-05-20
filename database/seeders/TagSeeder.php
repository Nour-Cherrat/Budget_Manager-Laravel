<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'user_id' => '1',
            'name' => 'Groceries',
            'color' => '88db98',
        ]);

        DB::table('tags')->insert([
            'user_id' => '1',
            'name' => 'Utilities',
            'color' => '938fd9',
        ]);

        DB::table('tags')->insert([
            'user_id' => '1',
            'name' => 'Entertainment',
            'color' => 'e38181',
        ]);
    }
}
