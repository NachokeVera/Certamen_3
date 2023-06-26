@extends('layouts.masterLoginCrear')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center vh-100">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Iniciar sesión</h2>
                    <form action="{{route('artista.iniciar')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3"><a href="{{route('artista.CrearCuenta')}}">Registrarse</a></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection