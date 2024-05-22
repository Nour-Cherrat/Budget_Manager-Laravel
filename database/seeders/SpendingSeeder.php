<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spendings')->insert([
            'user_id' => '1',
            'recurring' => 1,
            'tag_id' => '1',
            'date' => Carbon::createFromFormat('d', '1'),
            'description' => 'desc test',
            'amount' => '100',
        ]);

        DB::table('spendings')->insert([
            'user_id' => '1',
            'recurring' => 1,
            'tag_id' => '2',
            'date' => Carbon::createFromFormat('d', '1'),
            'description' => 'desc test',
            'amount' => '70',
        ]);

    }
}
