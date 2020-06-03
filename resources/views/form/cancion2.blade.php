@extends('layouts.app')

@section('content')
<div class="my-5">
<h2>Añadir Cancion</h2>

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
		<input type="hidden" name="album" value="{{$album->id}}">
		<br>
		<div class="d-flex justify-content-center align-items-center">
			<input type="submit" value="Añadir Cancion" class="btn btn-info btn-block col-6">
		</div>
	</form>

</div>
	<div class="d-flex justify-content-center">
		<div class="col-6">
		<a href="{{route('album.show', $album->id)}}" class="btn btn-info btn-lg btn-block">No hay mas canciones, Ver el Album.</a>
	</div>
	</div>
</div>

@endsection