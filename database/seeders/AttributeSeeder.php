<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attributes')->delete();

        $attributes = array(
			array('name' => 'size'),
			array('name' => 'color'),
            array('name' => 'shoe_size'),
            array('name' => 'weight'),
            array('name' => 'transmission'),
        );

        DB::table('attributes')->insert($attributes);
    }
}
