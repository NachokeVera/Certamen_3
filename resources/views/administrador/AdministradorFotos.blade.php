@extends('layouts.masterAdministrador')
@section('nav-administrador')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="ruta_de_la_imagen.jpg" class="card-img-top" alt="Título de la fotografía">
                <div class="card-body">
                    <h5 class="card-title">Título de la fotografía</h5>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarModal">Eliminar</button>
                </div>
            </div>
        </div>
        
    </div>
</div>

<
<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarModalLabel">Eliminar fotografía</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar esta fotografía?</p>
                <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea class="form-control" id="comentario" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@endsection