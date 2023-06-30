<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Imagen;

class InicioController extends Controller
{
    public function index(){
        $imagenes = Imagen::all();
        return view('inicio.index',compact('imagenes'));
    }
}
