<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      
    </style>
</head>
<body class="bg-light"> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Intagram</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio.index') }}">Obras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artista.login') }}">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artista.CrearCuenta') }}">Crear cuenta</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="ruta_de_la_imagen.jpg" class="card-img-top" alt="Título de la fotografía">
                    <div class="card-body">
                        <h5 class="card-title">Título de la fotografía</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="ruta_de_la_imagen.jpg" class="card-img-top" alt="Título de la fotografía">
                    <div class="card-body">
                        <h5 class="card-title">Título de la fotografía</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="ruta_de_la_imagen.jpg" class="card-img-top" alt="Título de la fotografía">
                    <div class="card-body">
                        <h5 class="card-title">Título de la fotografía</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
