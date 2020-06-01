@extends('layouts.app')

@section('content')

<h2>Añadir Album</h2>

<div class="d-flex justify-content-center my-5">
	<form action="{{route('cancion.store')}}" method="post" enctype="multipart/form-data" >
		 @csrf
		<div class="d-flex justify-content-between align-items-center">
			Nombre: 
			<div>
				<input type="text" name="nombre" value="{{old('nombre')}}">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-between align-items-center">
			Duracion: 
			<div>
				<input type="text" name="duracion" value="{{old('duracion')}}" placeholder="0:00">
			</div>
		</div>
		<br>
		
		<br>
		<div class="d-flex justify-content-center align-items-center">
			<input type="submit" value="Añadir Cantante" class="btn btn-info btn-block col-6">
		</div>
	</form>
</div>

@endsection