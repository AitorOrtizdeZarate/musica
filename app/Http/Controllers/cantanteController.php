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
        /*$foto = $request->file('imagen')->getClientOriginalName();
        $cantante->imagen = $request->file('imagen')->move("imagenes/cantantes/".$foto);*/
        $cantante->imagen = $request->imagen->getClientOriginalName();
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
        //
    }
}
