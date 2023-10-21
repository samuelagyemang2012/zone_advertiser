<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->delete();

        $roles = array(
			array('name' => 'admin'),
			array('name' => 'customer'),
            array('name' => 'vendor'),
        );

        DB::table('roles')->insert($roles);
    }
}
