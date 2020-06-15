<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cantante;

class cantanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cantantes = Cantante::all();
        return view('cantante', compact('cantantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cantantes = Cantante::all();
        return view('form.cantante')->with('cantantes', $cantantes); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $cantante = new Cantante;
        $cantante->nombre = $request->input('nombre');
        $cantante->edad = $request->input('edad');

        //Estas dos lineas guarda la ruta de la foto en la base de datos
        $foto = $request->file('imagen')->getClientOriginalName();
        $cantante->imagen = "imagenes/cantantes/".$foto;
        
        //Estas dos lineas guardan la imagen seleccionada en la carpeta public
        $file = $request->file('imagen');
        $file->storeAs('cantantes',$foto, ['disk' => 'my_files']);
        
        
        /*$cantante->imagen = $request->file('imagen')->store('imagenes/cantantes/'.$foto);*/
        /*$cantante->imagen = $request->imagen->getClientOriginalName();*/
        /* Esto guarda la imagen en storage */
        /*request()->file('imagen')->storeAs(public_path(),'imagenes/cantantes/'.$request->imagen->getClientOriginalName());*/
        $cantante->save();
        return redirect()->route('cantante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cantantes = Cantante::find($id);
        return view('albums')->with('cantantes', $cantantes);

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
        $cantante = Cantante::find($id);
        $cantante->delete();
        return redirect()->route('cantante.index');
    }
}
