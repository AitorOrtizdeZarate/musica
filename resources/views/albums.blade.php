@extends('layouts.app')

@section('content')
   <br>
  <div>
  	<h1 style="font-size: 70px;">{{$cantantes->nombre}}</h1>
  	<br>
  	<img src="/{{$cantantes->imagen}}" class="rounded-circle border border-dark"  style="width: 325px;">
  </div>

  <hr>
  <h2 style="font-size: 50px;">Populares</h2>

  <div class="d-flex justify-content-center ">
  <div class="col-3 row d-flex justify-content-center align-items-center m-2">
  	@php $i = 0; @endphp
    @foreach($canciones as $cancion)
    @if($i < 5)
        <div class="border border-secondary col-12 d-flex justify-content-between align-items-center  bg-dark text-white rounded" style="height: 40px;" >
          <p>{{$cancion->nombre}}</p>
          <p>{{$cancion->duracion}}</p>
          <p>{{$cancion->repros}}</p>
          
        </div>
    @php $i++ @endphp
    @endif
    @endforeach
    </div>
  </div>
  
  <hr> 
  	<div>
  		<h2 style="font-size: 50px;">Albums</h2>
  	</div>
  	@guest
  	@else
  	@if(auth()->user()->isAdmin())
  	<div class="d-flex align-items-center justify-content-end mx-5" style="height: 50px;">
		 <a href="{{route('album.createAlbum', $cantantes->id)}}"><img src="/imagenes/plus.png" style="width: 50px; height: 50px;" class="border border-dark rounded-circle"></a>
	</div>
	@endif
	@endguest

  	<div class="d-flex justify-content-center">
	  <div class="card-deck col-8" style="margin-top: 3%;">
	    @foreach($albums as $album)
	    	<div class="col-3" style="height: 500px;">
			  <div class="card border border-dark">
			    <img class="card-img-top border-bottom border-dark" src="/{{$album->imagen}}" alt="Card image cap" style="height: 250px;">
			    <div class="card-body">
			      <h5 class="card-title" style="height: 50px;">{{$album->nombre}}</h5>
			      <p class="card-text">{{$album->fecha}}</p>
			      <p class="card-text">{{$album->genero}}</p>
			    </div>
			    <div class="card-footer">
			       <a href="{{route('album.show', $album->id)}}" class="btn btn-info btn-block">Ver Album</a>
			    </div>
			  </div>
			</div>
			 @endforeach
		</div>
		</div>

   
@endsection