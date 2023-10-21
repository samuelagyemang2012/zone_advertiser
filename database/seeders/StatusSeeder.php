<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            ['name' => 'Pending'],
            ['name' => 'Processed'],
            ['name' => 'Delivered'],
            ['name' => 'Open'],
            ['name' => 'Closed'],
            ['name' => 'Deactivated'],
        ]);
    }
}
