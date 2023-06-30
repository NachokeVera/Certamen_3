<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ImagenController extends Controller
{
    public function foto()
    {
        $imagen = Imagen::all();
        return view('artista.subir_foto', compact('imagen'));
    }
    public function guardar(Request $request){
        $request->validate(
            ['titulo' => 'required|max:20',
            'archivo' => 'required|image'] // validación de imagen aquí
        );
        $imagenes = $request->file('archivo')->store('public/fotos');
        $url = Storage::url($imagenes);
        
        //$cuentaUser = $user->user;
        if (auth()->check()){
            $user = auth()->user();
            $cuentaUser = $user->user;
            return dd($cuentaUser);
            Imagen::create([
                'titulo' => $request->titulo,
                'archivo' => $url,
                'motivo_ban' => "",
                'cuenta_user'=> $cuentaUser
            ]);
            return redirect()->route('inicio.index');
        } else{
            return dd($user);
        }
        
        
        
        
    }
}
