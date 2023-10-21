<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->delete();

        $currencies = array(
			array('country_code' => 'GH', 'symbol' => 'GHS'),
			array('country_code' => 'ZM', 'symbol' => 'ZK'),
            array('country_code' => 'NG', 'symbol' => '₦'),
            array('country_code' => 'PK', 'symbol' => 'Rs')
        );

        DB::table('currencies')->insert($currencies);


    }
}
