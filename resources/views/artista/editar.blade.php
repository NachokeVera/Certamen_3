@extends('layouts.app-master')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('artista.subirEdit', $imagen->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" class="form-control">
                </div>
            
                <div class="form-group mb-3">
                    <label for="archivo">Imagen:</label>
                    <img src="{{ asset($imagen->archivo) }}" alt="img">
                </div>
                
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
</div>
@endsection