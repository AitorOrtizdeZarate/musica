<?php

use Illuminate\Database\Seeder;
use App\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = Album::create([
        	'nombre' => 'Industry Plant',
        	'imagen' => 'imagenes/albums/industry.jpg',
        	'fecha' => '2019/12/08',
        	'genero' => 'Hip-hop / Rap',
            'cantante_id' => 1
        ]);
        $albums = Album::create([
        	'nombre' => 'Death Race for Love',
        	'imagen' => 'imagenes/albums/death.jpg',
        	'fecha' => '2018/03/08',
        	'genero' => 'Hip-hop/Rock',
            'cantante_id' => 2
        ]);
    }
}
