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
        $this->call(CantantesSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(CancionesSeeder::class);
    }
}
