<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use Illuminate\Support\Facades\Auth;

class ArtistaController extends Controller
{
    public function vistaMisFotos(){
        $imagenes = Imagen::where('cuenta_user', Auth::user()->user)->get();
        return view('artista.misfotos',compact('imagenes'));
    }
}
