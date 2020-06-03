@extends('layouts.app')

@section('content')
   <br>
  <div>
  	<h1 style="font-size: 70px;">{{$albums->nombre}}</h1>
  	<br>
  	<img src="/{{$albums->imagen}}" class="border border-dark"  style="width: 275px;">
  </div>
  <hr>


<div class="d-flex align-items-center justify-content-end mx-5" style="height: 50px;">
     <a href="{{route('cancion.createCancion', $albums->id)}}"><img src="/imagenes/plus.png" style="width: 50px; height: 50px;" class="border border-dark rounded-circle"></a>
  </div>
<div class="d-flex justify-content-center ">
  <div class="col-9 row d-flex justify-content-center">
    @foreach($albums->cancion as $cancion)
        <div class="border border-dark col-3 d-flex justify-content-between align-items-center bg-light m-3 rounded" >
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