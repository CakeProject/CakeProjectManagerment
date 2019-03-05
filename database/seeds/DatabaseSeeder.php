<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(cakes::class);
        $this->call(colors::class);
        $this->call(flavour::class);
        $this->call(shapes::class);
        $this->call(size_prices::class);

    }
}
