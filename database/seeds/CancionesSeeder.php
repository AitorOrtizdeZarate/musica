<?php

use Illuminate\Database\Seeder;
use App\Cancion;

class CancionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Nothings ever good enough
        $canciones = Cancion::create([
            'nombre' => '18',
            'duracion' => '2:07',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
            'nombre' => 'romance361',
            'duracion' => '3:01',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
            'nombre' => 'cutthroat',
            'duracion' => '3:31',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
            'nombre' => 'molly',
            'duracion' => '2:56',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
            'nombre' => 'emotions',
            'duracion' => '2:11',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
            'nombre' => 'who cares',
            'duracion' => '2:03',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
            'nombre' => 'dont want to fall',
            'duracion' => '1:59',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
            'nombre' => 'crash my whip',
            'duracion' => '1:59',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);

    	//industry plant
        $canciones = Cancion::create([
        	'nombre' => 'Darkside',
        	'duracion' => '2:35',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Problems',
        	'duracion' => '2:24',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Gone girl',
        	'duracion' => '2:17',
        	'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'WYA',
        	'duracion' => '2:44',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'What is Real',
        	'duracion' => '2:15',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Flowers',
        	'duracion' => '1:54',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Strings',
        	'duracion' => '3:14',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Lately',
        	'duracion' => '2:12',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Urself',
        	'duracion' => '3:00',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'In Too Deep',
        	'duracion' => '2:42',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Searching',
        	'duracion' => '2:19',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Needed',
        	'duracion' => '2:02',
            'repros' => rand(0,5000000),
            'album_id' => 1,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Never is Enought',
        	'duracion' => '2:14',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Feel it Coming',
        	'duracion' => '2:13',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);
        $canciones = Cancion::create([
        	'nombre' => 'Stay for a While',
        	'duracion' => '2:45',
            'repros' => rand(0,5000000),
            'album_id' => 2,
            'cantante_id' => 1
        ]);

        

        //Goodbye & Good Riddance
        $canciones = Cancion::create([
            'nombre' => 'Intro',
            'duracion' => '1:15',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'All Girs Are The Same',
            'duracion' => '2:46',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Lucid Dreams',
            'duracion' => '4:00',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Wasted',
            'duracion' => '4:18',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Armed And Dangerous',
            'duracion' => '2:50',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Black & White',
            'duracion' => '3:07',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Lean With Me',
            'duracion' => '2:56',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'I`ll be Fine',
            'duracion' => '4:04',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Used To',
            'duracion' => '2:56',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Candles',
            'duracion' => '3:04',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Scared Of Love',
            'duracion' => '2:51',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Hurt Me',
            'duracion' => '2:02',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Im Still',
            'duracion' => '3:13',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'End Of The Road',
            'duracion' => '2:43',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Long Gone',
            'duracion' => '3:07',
            'repros' => rand(0,5000000),
            'album_id' => 3,
            'cantante_id' => 2
        ]);

        //Wrld on Drugs
        $canciones = Cancion::create([
            'nombre' => 'Jet Lag',
            'duracion' => '4:31',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Astronauts',
            'duracion' => '2:50',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Fine China',
            'duracion' => '2:22',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Red Bentley',
            'duracion' => '3:28',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Make It Black',
            'duracion' => '1:43',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Oxy',
            'duracion' => '3:00',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => '7 Am Freestyle',
            'duracion' => '3:13',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Different',
            'duracion' => '2:31',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Shorty',
            'duracion' => '2:01',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Realer N Realer',
            'duracion' => '2:51',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'No Issue',
            'duracion' => '3:05',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'WRLD On Drugs',
            'duracion' => '3:37',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Afterlife',
            'duracion' => '3:37',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Aint Livin Right',
            'duracion' => '3:51',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Transformer',
            'duracion' => '3:16',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Hard Work Pays Off',
            'duracion' => '3:45',
            'repros' => rand(0,5000000),
            'album_id' => 4,
            'cantante_id' => 2
        ]);

        //Death Race for Love
        $canciones = Cancion::create([
            'nombre' => 'Empty',
            'duracion' => '4:09',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Maze',
            'duracion' => '2:24',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'HeMotions',
            'duracion' => '3:07',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Demonz',
            'duracion' => '1:35',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Fast',
            'duracion' => '3:29',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Hear me Calling',
            'duracion' => '3:10',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Big',
            'duracion' => '3:44',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Robbery',
            'duracion' => '4:00',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Flaws And Sins',
            'duracion' => '3:38',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Feeling',
            'duracion' => '3:22',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Syphilis',
            'duracion' => '2:12',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Who Shot Cupid?',
            'duracion' => '3:34',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Ring Ring',
            'duracion' => '2:52',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Desire',
            'duracion' => '3:10',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Out My Way',
            'duracion' => '2:37',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'The Bees Knees',
            'duracion' => '5:26',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'ON GOD',
            'duracion' => '4:10',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => '10 Feet',
            'duracion' => '3:32',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Wont Let Go',
            'duracion' => '3:20',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Shes The One',
            'duracion' => '3:09',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Rider',
            'duracion' => '3:12',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
        $canciones = Cancion::create([
            'nombre' => 'Make Believe',
            'duracion' => '2:22',
            'repros' => rand(0,5000000),
            'album_id' => 5,
            'cantante_id' => 2
        ]);
    }
}
