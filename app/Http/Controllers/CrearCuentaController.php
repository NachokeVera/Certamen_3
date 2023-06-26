<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrarRequest;
use App\Models\Cuenta;

class CrearCuentaController extends Controller
{
    public function vistaCrear(){
        return view('artista.CrearCuenta');
    }
    public function registrar(RegistrarRequest $request){

        $cuenta = new Cuenta();
        $cuenta ->user = $request->user;
        $cuenta ->nombre = $request->nombre;
        $cuenta ->apellido = $request->apellido;
        $cuenta ->password = $request->password;
        
        $cuenta->save();
        return redirect()->route('artista.login'); 
    }
    

}
