@extends('layouts.app')

@section('content')
   
   <h1 style="font-size: 70px;">Cantantes</h1>
   
   <div class="d-flex justify-content-center">
   <div class="card-deck col-10" style="margin-top: 3%;">
    @foreach($cantantes as $cantante)
    	<div class=" col-3" style="height: 600px;">
		  <div class="card border border-dark">
		    <img class="card-img-top" src="{{$cantante->imagen}}" alt="Card image cap" style="height: 300px;">
		    <div class="card-body">
		      <h5 class="card-title">{{$cantante->nombre}}</h5>
		      <p class="card-text">{{$cantante->edad}} años</p>
		      @guest
		      @else
		      @if(auth()->user()->isAdmin())
		      <div class="d-flex row justify-content-end">
		      	 <div class="d-flex justify-content-end mx-2">
                  	<a href="{{route('cantante.edit', $cantante->id)}}"><img src="/imagenes/update.png" style="width: 20px; height: 20px;"></a>
                  </div>
		      <form action="{{route('cantante.destroy', $cantante->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <div class="d-flex justify-content-end">
                  	<input type="image" type="submit" src="/imagenes/delete.png" style="width: 20px; height: 20px;">
                  </div>                
                </form>
		      </div>
		      
		      @else
		      <div class="d-flex justify-content-end">
		      	<a href="{{route('addfav', $cantante->id)}}"><img src="/imagenes/fav.png" style="width: 20px; height: 20px;"></a>
		      </div>
		      @endif
		      @endguest
		    </div>
		    <div class="card-footer">
		       <a href="{{route('cantante.show', $cantante->id)}}" class="btn btn-info btn-block">Ver Cantante</a>
		    </div>
		  </div>
		</div>
		 @endforeach
		 @guest
		 @else
		 @if(auth()->user()->isAdmin())
		 <div class="d-flex align-items-center mx-5" style="height: 450px;">
		 	<a href="{{route('cantante.create')}}"><img src="/imagenes/plus.png" style="width: 200px; height: 200px;" class="border border-dark rounded-circle"></a>
		 </div>
		 @endif
		 @endguest
	</div>
	</div>

   
@endsection