@extends('layouts.app')

@section('content')

<h2>Añadir Album</h2>

<div class="d-flex justify-content-center my-5">
	<form action="{{route('album.store')}}" method="post" enctype="multipart/form-data" >
		 @csrf
		<div class="d-flex justify-content-between align-items-center">
			Nombre: 
			<div>
				<input type="text" name="nombre" value="{{old('nombre')}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Genero: 
			<div>
				<input type="text" name="genero" value="{{old('genero')}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Fecha: 
			<div>
				<input type="date" name="fecha" value="{{old('fecha')}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Imagen:
			<div>
				<input type="file" name="imagen">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-center align-items-center">
			<input type="submit" value="Añadir Cantante" class="btn btn-info btn-block col-6">
		</div>
	</form>
</div>

@endsection