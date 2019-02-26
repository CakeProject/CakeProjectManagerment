<?php

use Illuminate\Database\Seeder;

class shapes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shapes')->insert([
        	'shape' => "Cicle"
        ],
    	[
        	'shape' => "Square"
        ],
        [
        	'shape' => "Rectangle"
        ],
        [
        	'shape' => "Triangle"
        ],
        [
        	'shape' => "Hexagon"
        ],
        [
        	'shape' => "Heart"
        ],
        [
        	'shape' => "Topping"
        ]
    	);
    }
}
