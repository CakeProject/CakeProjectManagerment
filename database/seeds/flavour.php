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
        ]);
       DB::table('flavours')->insert([
            'flavour' => "Pineapple"
        ]);
       DB::table('flavours')->insert([
            'flavour' => "Chocolate"
        ]);
       DB::table('flavours')->insert([
            'flavour' => "Caramel"
        ]);
       DB::table('flavours')->insert([
            'flavour' => "Apple"
        ]);
       DB::table('flavours')->insert([
            'flavour' => "Strawberry"
        ]);
       DB::table('flavours')->insert([
            'flavour' => "Durian"
        ]);

    }
}
