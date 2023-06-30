<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = 'imagenes';

    protected $primaryKey = 'id'; // Especifica la clave primaria de la tabla

    protected $fillable = ['titulo', 'archivo', 'baneada', 'motivo_ban', 'cuenta_user']; // Especifica los campos que se pueden rellenar

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'cuenta_user', 'user'); // Define la relación con el modelo Cuenta
    }
}
