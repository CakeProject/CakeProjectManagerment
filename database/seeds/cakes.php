<?php

use Illuminate\Database\Seeder;

class cakes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cakes')->insert([
        	'name' => "Spider Man"
        ],
    	[
        	'name' => "Star"
        ],
        [
        	'name' => "Rose"
        ],
        [
        	'name' => "Hulk"
        ],
        [
        	'name' => "Bare bear"
        ],
        [
        	'name' => "Bird"
        ],
        [
        	'name' => "Ball"
        ]
    	);
    }
}
