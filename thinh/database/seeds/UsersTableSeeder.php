<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	["user_name"=>"admin","email"=>"admin@gmail.com","password_hash"=>Hash::make("123456")],
        	["user_name"=>"Faker","email"=>"Faker@gmail.com","password_hash"=>Hash::make("123456")],
        ];
        foreach ($users as $value) {
        	DB::table('users')->insert($value);
        }
    }
}
//chay roi