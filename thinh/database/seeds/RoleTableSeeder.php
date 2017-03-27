<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=[
        	["role_name"=>"admin"],
        	["role_name"=>"member"],
        	["role_name"=>"read"],
        	["role_name"=>"write"]
        ];
        foreach ($role as $value) {
            DB::table('role')->insert($value);
        }
    }
}
// chay roi