@extends('layouts.app')

@section('content')
   
   <h1 style="font-size: 70px;">Cantantes favoritos</h1>

   @foreach($users->cantante as $cantante)
   	<p>{{$cantante->nombre}}</p>
   @endforeach
   
   

   
@endsection