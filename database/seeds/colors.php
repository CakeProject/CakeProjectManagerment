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
        ]);
        DB::table('colors')->insert([
            'color' => "Black"
        ]);
        DB::table('colors')->insert([
            'color' => "White"
        ]);
        DB::table('colors')->insert([
            'color' => "Green"
        ]);
        DB::table('colors')->insert([
            'color' => "Purple"
        ]);
        DB::table('colors')->insert([
            'color' => "Orage"
        ]);
        DB::table('colors')->insert([
            'color' => "Pink"
        ]);

    }
}
