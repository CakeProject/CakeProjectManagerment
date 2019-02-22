<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cake')->insert([
        // 	'shape' => 'square',
        // 	'flavour' => 'durian',
        // 	'color' => 'yellow',
        // 	'description' => 'hello there'
        // ]);
        DB::table('users')->insert([
            'name' => "Leaphea",
            'email' =>'leaphea@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
