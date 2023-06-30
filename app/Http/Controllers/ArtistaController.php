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
    public function editar($id){
        $imagen = Imagen::find($id); 
        return view('artista.editar',compact('imagen'));
    }
    public function subirEdit(Request $request, $id){
        $imagen = Imagen::find($id);
        $imagen->titulo = $request->input('titulo');
        $imagen->save();

        return $this->vistaMisFotos();
    }
    public function eliminar($id){  
        $imagen = Imagen::find($id);
        $imagen->delete();
        return $this->vistaMisFotos();  
    }
}
