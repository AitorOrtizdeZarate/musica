<?php

use Illuminate\Database\Seeder;
use App\Cantante;

class CantantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantantes = Cantante::create([
        	'nombre' => 'Iann Dior',
        	'imagen' => 'imagenes/cantantes/ianndior.jpeg'
        ]);
        $cantantes = Cantante::create([
        	'nombre' => 'Juice WRLD',
        	'imagen' => 'imagenes/cantantes/juice.png'
        ]);
    }
}
