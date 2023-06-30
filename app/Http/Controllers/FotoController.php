<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Http\Requests\FotosRequest;
class FotoController extends Controller
{
    public function foto()
    {
        $fotos = Foto::all();
        return view('artista.subir_foto', compact('fotos'));
    }

    public function guardar(Request $request)
    
{
    
    $request->validate([
        'titulo' => 'required',
        'autor' => 'required',
        'foto' => 'required|image|max:2048', // validación de imagen aquí
    ]);
    /* public function messages(){
        return [
            'titulo.required' => 'Indique el titulo',
            'autor.required' => 'indique el nombre del autor',
            'foto.required' => 'ingrese la fotografia',
            
        ];
     }
 } */

    if ($request->hasFile('foto')) {
        $imagen = $request->file('foto');
        $nombreImagen = time() . '_' . $imagen->getClientOriginalName();

        
        $imagen->storeAs('public/fotos', $nombreImagen);
    }

    
    Foto::create([
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'nombre_foto' => $nombreImagen, 
    ]);

    return redirect()->back()->with('success', 'Foto subida exitosamente.');
}

}
