<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
        	["cate_name"=>"Me toi","discription"=>"Me toi la nhat"],
        	["cate_name"=>"Cha toi","discription"=>"Cha toi la nhat","feature_image"=>"hihi","parent_id"=>"1"]
        ];
        foreach ($category as $value) {
        	DB::table('category')->insert($value);
        }
    }
}
// chay roi