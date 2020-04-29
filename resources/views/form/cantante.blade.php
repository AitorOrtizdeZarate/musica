@extends('layouts.app')

@section('content')

<h2>Añadir Cantante</h2>

<div class="d-flex justify-content-center my-5">
	<form action="{{route('cantante.store')}}" method="post" enctype="multipart/form-data" >
		 @csrf
		<div class="d-flex justify-content-between align-items-center">
			Nombre: 
			<div>
				<input type="text" name="nombre" value="{{old('nombre')}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Edad: 
			<div>
				<input type="number" name="edad" value="{{old('edad')}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Imagen:
			<div>
				<input accept="imagenes/cantantes/*" type="file" name="imagen">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-center align-items-center">
			<input type="submit" value="Añadir Cantante" class="btn btn-info btn-block col-6">
		</div>
	</form>
</div>

@endsection