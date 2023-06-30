<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrarRequest;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CrearCuentaController extends Controller
{
    public function vistaCrear(){
        if(Auth::check()){
            return redirect()->route('inicio.index');
        }
        return view('artista.crearCuenta');
    }
    public function registrar(RegistrarRequest $request){

        $cuenta = new Cuenta();
        $cuenta ->user = $request->user;
        $cuenta ->nombre = $request->nombre;
        $cuenta ->apellido = $request->apellido;
        //$cuenta ->password = $request->password;
        $cuenta ->password = Hash::make($request->password);
        
        Auth::login($cuenta);
        $cuenta->save();
        

        return redirect()->route('inicio.index'); 
    }
    

}
