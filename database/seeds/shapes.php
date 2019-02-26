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
        ]);
        DB::table('shapes')->insert([
            'shape' => "Square"
        ]);
        DB::table('shapes')->insert([
            'shape' => "Rectangle"
        ]);
        DB::table('shapes')->insert([
            'shape' => "Triangle"
        ]);
        DB::table('shapes')->insert([
            'shape' => "Hexagon"
        ]);
        DB::table('shapes')->insert([
            'shape' => "Heart"
        ]);
        DB::table('shapes')->insert([
            'shape' => "Topping"
        ]);
    }
}
