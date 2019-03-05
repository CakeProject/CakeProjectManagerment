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
        ]);
         DB::table('cakes')->insert([
            'name' => "Star"
        ]);
          DB::table('cakes')->insert([
            'name' => "Rose"
        ]);
           DB::table('cakes')->insert([
            'name' => "Hulk"
        ]);
            DB::table('cakes')->insert([
            'name' => "Bare bear"
        ]);
             DB::table('cakes')->insert([
            'name' => "Bird"
        ]);
              DB::table('cakes')->insert([
            'name' => "Ball"
        ]);
    }
}
