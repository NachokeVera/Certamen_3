@extends('layouts.app-master')
@section('contenido')
<div class="container mt-4">
    <div class="row">
        <div class="col">
            
                
            
            <h2>Usuarios Registrados</h2>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acciones</th>
                    </tr>
                
                </thead>
                
                <tbody>
                    @foreach ($cuenta as $usuario)
                        <tr>
                            <td>{{ $usuario->user }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->apellido }}</td>
                            <td>
                                <form action="{{ route('cuenta.destroy', $usuario->user) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
           
        </div>
        <div class="col">
            <h2>Administradores</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Administrador 1</td>
                        <td>Apellido 1</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection