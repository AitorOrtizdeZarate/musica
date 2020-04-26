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
        //Iann Dior
        $albums = Album::create([
        	'nombre' => 'Industry Plant',
        	'imagen' => 'imagenes/albums/industry.jpg',
        	'fecha' => '2019/12/08',
        	'genero' => 'Hip-hop / Rap',
            'cantante_id' => 1
        ]);
        $albums = Album::create([
            'nombre' => 'nothings ever good enough',
            'imagen' => 'imagenes/albums/nothing.jpg',
            'fecha' => '2019/04/12',
            'genero' => 'Hip-hop / Rap',
            'cantante_id' => 1
        ]);

        //Juice WRLD
        $albums = Album::create([
        	'nombre' => 'Death Race for Love',
        	'imagen' => 'imagenes/albums/death.jpg',
        	'fecha' => '2018/03/08',
        	'genero' => 'Hip-hop / Rock',
            'cantante_id' => 2
        ]);
         $albums = Album::create([
            'nombre' => 'Goodbye & Good Riddance',
            'imagen' => 'imagenes/albums/goodbye.jpg',
            'fecha' => '2018/05/23',
            'genero' => 'Hip-hop / Rap',
            'cantante_id' => 2
        ]);
         $albums = Album::create([
            'nombre' => 'Wrld on Drugs',
            'imagen' => 'imagenes/albums/Wrld.jpg',
            'fecha' => '2018/10/19',
            'genero' => 'Hip-hop / Rap',
            'cantante_id' => 2
        ]);
    }
}
