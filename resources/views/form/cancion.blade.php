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
		<br>
		<div>
			@if ($errors->has('nombre'))
	            <label style="color: red">
	                {{$errors->first('nombre')}}
	            </label><br>
	        @endif

	        @if ($errors->has('duracion'))
	            <label style="color: red">
	                {{$errors->first('duracion')}}
	            </label><br>
	        @endif
		</div>
	</form>

</div>
</div>

@endsection