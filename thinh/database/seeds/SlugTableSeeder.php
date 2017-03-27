<?php

use Illuminate\Database\Seeder;

class SlugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug=[
        	["slug_name"=>"789","entity_id"=>1,"entity"=>3],
        	["slug_name"=>"456","entity_id"=>2,"entity"=>2]
        ];
        foreach ($slug as $value) {
            DB::table('slug')->insert($value);
        }
    }
}
// chay dl lieu