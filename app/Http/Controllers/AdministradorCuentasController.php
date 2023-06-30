<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
class AdministradorCuentasController extends Controller
{
    public function cuentas(){
        $cuenta = Cuenta::all();
        return view('administrador.AdministradorCuentas', compact('cuenta'));

    }
    public function destroy(Cuenta $cuenta){

        $cuenta->delete();
        return redirect()->route('administrador.AdministradorCuentas');
    }
}
