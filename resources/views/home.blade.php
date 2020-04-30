@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body d-flex justify-content-between">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    You are logged in!
                    <div>
                        <a href="/"><button type="button" class="btn btn-primary">Pagina Principal</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
