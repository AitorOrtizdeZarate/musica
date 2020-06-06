@extends('layouts.app')

@section('content')
   
   <h1 style="font-size: 70px;">Cantantes favoritos</h1>

   @foreach($users->cantante as $cantante)
   	<div class="d-flex justify-content-center">
   		<div class="d-flex justify-content-between align-items-center bg-dark flex-row border border-secondary rounded text-white col-6" style="height: 100px;">
		  <div>
		  	<img src="/{{$cantante->imagen}}" style="height: 90px;" class="rounded-circle ">
		  </div>
		  <div class="p-2 col-2">
		  	<h4>{{$cantante->nombre}}</h4>
		  </div>
		  <div class="p-2 col-2 d-flex align-items-center">
		  	<h5 >{{count($cantante->album)}} albums</h5>
		  </div>
		  <div class="p-2">
		  	<a href="{{route('cantante.show', $cantante->id)}}" class="btn btn-info btn-block">Ver Cantante</a>
		  </div>
		</div>
   	</div>
   	@endforeach
   
   
   

@endsection

