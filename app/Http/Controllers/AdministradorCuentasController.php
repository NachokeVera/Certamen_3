<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorCuentasController extends Controller
{
    public function cuentas(){
        return view('administrador.AdministradorCuentas');
    }
}
