<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Cantante;

class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $albums = Album::all();
        return view('form.album')->with('albums', $albums); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'genero' => 'required',
            'fecha' => 'required|date',
            'imagen' => 'required'

        ]);

        $albums = new Album;
        $albums->nombre = $request->input('nombre');
        $albums->genero = $request->input('genero');
        $albums->fecha = $request->input('fecha');

        //Estas dos lineas guarda la ruta de la foto en la base de datos
        $foto = $request->file('imagen')->getClientOriginalName();
        $albums->imagen = "imagenes/albums/".$foto;

        //Estas dos lineas guardan la imagen seleccionada en la carpeta public
        $file = $request->file('imagen');
        $file->storeAs('albums',$foto, ['disk' => 'my_files']);

        $albums->cantante_id = $request->input('cantante');



        $albums->save();
        return redirect()->route('cancion.createCancion', $albums->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $albums = Album::find($id);
        return view('canciones')->with('albums', $albums);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createAlbum($id)
    {
        $cantante = Cantante::find($id);
        $albums = Album::all();
        return view('form.album')->with('cantante', $cantante)->with('albums', $albums);
    }
}
