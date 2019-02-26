<?php

use Illuminate\Database\Seeder;

class colors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
        	'color' => "Yellow"
        ],
    	[
        	'color' => "Black"
        ],
        [
        	'color' => "White"
        ],
        [
        	'color' => "Green"
        ],
        [
        	'color' => "Purple"
        ],
        [
        	'color' => "Orage"
        ],
        [
        	'color' => "Pink"
        ]
    	);
    }
}
