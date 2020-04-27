@extends('layouts.app')

@section('content')
   <br>
  <div>
  	<h1 style="font-size: 70px;">{{$albums->nombre}}</h1>
  	<br>
  	<img src="/{{$albums->imagen}}" class="border border-dark"  style="width: 275px;">
  </div>
  <hr>

  @foreach($albums->cancion as $cancion)
  <div class="d-flex justify-content-center">
  	<div class="border border-dark col-3 d-flex justify-content-between align-items-center bg-light">
  		<p>{{$cancion->nombre}}</p>
  		<p>{{$cancion->duracion}}</p>
  	</div>
  </div>
  @endforeach

  

  	

   
@endsection