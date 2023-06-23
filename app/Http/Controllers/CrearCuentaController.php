<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearCuentaController extends Controller
{
    public function crear(){
        return view('artista.CrearCuenta');
    }
}
