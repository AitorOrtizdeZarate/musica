@extends('layouts.app')

@section('content')
   
   <h1 style="font-size: 70px;">Llamada a API</h1>

   @if(isset($planetas))
	   	@foreach($planetas as $planeta)
	   		<p>{{$planeta['name']}}</p>
	   @endforeach
   @endif

   
   
   

@endsection

