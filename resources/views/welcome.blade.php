@extends('layouts.app')

@section('content')
   
    <div class="d-flex justify-content-center align-items-center" style="height: 800px;">
         <div class="col-6" style="margin-top: 30%;">
            <a href="{{route('cantante.index')}}" class="btn btn-info btn-lg btn-block">Ver Cantantes</a>
        </div>
     </div>
@endsection