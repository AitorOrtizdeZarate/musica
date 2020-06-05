@extends('layouts.app')

@section('content')
   <br>
  <div>
  	<h1 style="font-size: 70px;">{{$albums->nombre}}</h1>
  	<br>
  	<img src="/{{$albums->imagen}}" class="border border-dark"  style="width: 275px;">
  </div>
  <hr>


<!--<div class="d-flex align-items-center justify-content-end mx-5" style="height: 50px;">
     <a href="{{route('cancion.createCancion', $albums->id)}}"><img src="/imagenes/plus.png" style="width: 50px; height: 50px;" class="border border-dark rounded-circle"></a>
  </div>-->
<div class="d-flex justify-content-center ">
  <div class="col-3 row d-flex justify-content-center align-items-center m-2">
    @foreach($albums->cancion as $cancion)
        <div class="border border-secondary col-12 d-flex justify-content-between align-items-center  bg-dark text-white rounded" style="height: 40px;" >
          <p>{{$cancion->nombre}}</p>
          <p>{{$cancion->duracion}}</p>
        </div>
      
    @endforeach
    </div>
  </div>

  

  	

   
@endsection

<!-- 
<div class="d-flex justify-content-center">
    <div class="border border-dark col-3 d-flex justify-content-between align-items-center bg-light">
      <p>{{$cancion->nombre}}</p>
      <p>{{$cancion->duracion}}</p>
    </div>
  </div>
-->