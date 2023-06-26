@extends('layouts.masterLoginCrear')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center vh-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Crear cuenta Artista</h2>
                    <form action="{{route('artista.registrar')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Crear cuenta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection