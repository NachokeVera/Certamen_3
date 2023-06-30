@extends('layouts.app-master')
@section('contenido')
    <div class="container mt-4">
        <div class="row">
            @foreach ($imagenes as $imagen)
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset($imagen->archivo)}}" class="card-img-top" alt="Título de la fotografía">
                    <div class="card-body">
                        <h5 class="card-title">Titulo:</h5>
                        <h5 class="card-title">{{$imagen->titulo}}</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Autor:</h6>
                        <h6 class="card-title">{{$imagen->cuenta_user}}</h6>
                    </div>
                    <div class="card-body d-flex justify-content-between"">
                        <button class="btn btn-warning" type = "submit">Editar</button>
                        <button class="btn btn-danger" type= "subtmit">Eliminar</button>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
@endsection