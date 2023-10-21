<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->delete();

        $categories = array(
			array('name' => 'Electronics'),
			array('name' => 'Clothing'),
            array('name' => 'Shoes'),
            array('name' => 'Jewelry'),
            array('name' => 'Toys & games'),
            array('name' => 'Health'),
            array('name' => 'Household & Baby Care'),
            array('name' => 'Groceries'),
            array('name' => 'Decor'),
        );

        DB::table('categories')->insert($categories);
    }
}
