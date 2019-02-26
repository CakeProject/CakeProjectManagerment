<?php

use Illuminate\Database\Seeder;

class flavour extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('flavours')->insert([
        	'flavour' => "Coconut"
        ],
    	[
        	'flavour' => "Pineapple"
        ],
        [
        	'flavour' => "Chocolate"
        ],
        [
        	'flavour' => "Caramel"
        ],
        [
        	'flavour' => "Apple"
        ],
        [
        	'flavour' => "Strawberry"
        ],
        [
        	'flavour' => "Durian"
        ]
    	);
    }
}
