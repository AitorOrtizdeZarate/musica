@extends('layouts.app')

@section('content')
   
    @foreach($cantantes as $cantante)
    	<div class="text-white">
    		<p>{{$cantante->nombre}}</p>
    		<img src="{{$cantante->imagen}}">
    	</div>
    @endforeach
@endsection