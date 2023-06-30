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
                        <div class="card-body d-flex justify-content-between">
                            <a class = "btn btn-warning" href="{{route('artista.editar',$imagen->id)}}">Editar</a>
                            <form action="{{route('artista.eliminar',$imagen->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection