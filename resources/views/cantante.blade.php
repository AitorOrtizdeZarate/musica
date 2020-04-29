@extends('layouts.app')

@section('content')
   
   <h1 style="font-size: 70px;">Cantantes</h1>
   
   <div class="card-deck" style="margin-top: 3%;">
    @foreach($cantantes as $cantante)
    	<div class=" col-3" style="height: 550px;">
		  <div class="card border border-dark">
		    <img class="card-img-top" src="{{$cantante->imagen}}" alt="Card image cap" style="height: 350px;">
		    <div class="card-body">
		      <h5 class="card-title">{{$cantante->nombre}}</h5>
		      <p class="card-text">{{$cantante->edad}} años</p>
		    </div>
		    <div class="card-footer">
		       <a href="{{route('cantante.show', $cantante->id)}}" class="btn btn-info btn-block">Ver Cantante</a>
		    </div>
		  </div>
		</div>
		 @endforeach
		 <div class="d-flex align-items-center mx-5" style="height: 450px;">
		 	<a href="{{route('cantante.create')}}"><img src="/imagenes/plus.png" style="width: 200px; height: 200px;" class="border border-dark rounded-circle"></a>
		 </div>
	</div>

   
@endsection