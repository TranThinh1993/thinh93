<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

     */
    public function run()
    {
        $post=[
        	["title"=>"Cuoc doi me toi","content"=>"asdssssfsasassdasd","cate_id"=>"1"],
        	["title"=>"Tranfomer 4","content"=>"Cuoc chien cua nhung nguoi may","cate_id"=>"2"]
        ];
        foreach ($post as $value) {
        	DB::table('post')->insert($value);
        }
    }
}
// chay dl roi
