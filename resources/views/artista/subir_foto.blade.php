@extends('layouts.app-master')
@section('contenido')


<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">Subir Foto</div>
                <div class="card-body">
                     <!-- errores -->
                     @if ($errors->any())
                     {{--{{dd($errors->all())}} --}}
                         <div class="alert alert-danger">
                             <p>Por favor solucione los siguientes errores: </p>
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif
                     <!-- /errores -->
                    <form action="{{ route('artista.guardar_foto') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="archivo">Imagen:</label>
                            <input type="file" name="archivo" id="archivo" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Subir foto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection