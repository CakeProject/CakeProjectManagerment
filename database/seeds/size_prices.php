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
       DB::table('cakes')->insert([
        	'size' => "S"
        	'price' => 5
        ],
    	[
        	'size' => "M"
        	'price' =>10
        ]);
       
    }
}
