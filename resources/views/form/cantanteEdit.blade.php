@extends('layouts.app')

@section('content')
<div class="my-5">
<h2>Añadir Cantante</h2>

<div class="d-flex justify-content-center my-5">
	<form action="{{route('cantante.update', $cantante->id)}}" method="post" enctype="multipart/form-data" >
		@method('PUT')
		 @csrf
		<div class="d-flex justify-content-between align-items-center">
			Nombre: 
			<div>
				<input type="text" name="nombre" value="{{$cantante->nombre}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Edad: 
			<div>
				<input type="number" name="edad" value="{{$cantante->edad}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Imagen:
			<div>
				<input type="file" name="imagen" value="{{$cantante->imagen}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-center align-items-center">
			<input type="submit" value="Añadir Cantante" class="btn btn-info btn-block col-6">
		</div>
		<br>
		<div>
			@if ($errors->has('nombre'))
	            <label style="color: red">
	                {{$errors->first('nombre')}}
	            </label><br>
	        @endif

	        @if ($errors->has('edad'))
	            <label style="color: red">
	                {{$errors->first('edad')}}
	            </label><br>
	        @endif

	        @if ($errors->has('imagen'))
	            <label style="color: red">
	                {{$errors->first('imagen')}}
	            </label><br>
	        @endif
		</div>
	</form>
</div>
</div>

@endsection