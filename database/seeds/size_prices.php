<?php

use Illuminate\Database\Seeder;

class size_prices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sizes')->insert([
        	'size' => "S"
        ]);
       DB::table('sizes')->insert([
        	'size' => "M"
        ]);
       
    }
}
