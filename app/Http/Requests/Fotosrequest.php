<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Fotosrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'titulo' => 'required', 
        'autor' => 'required',
        'foto' => 'required|image|max:2048'
        ];
    }

    public function messages(){
        return [
            'titulo.required' => 'Indique el nombre del equipo',
            'autor.required' => 'Nombre del equipo debe tener como mínimo 3 letras',
            'foto.required' => 'Nombre del equipo debe tener como máximo 20 letras'
           
        ];

    }
}

