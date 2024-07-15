<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'direccion',
        'sexo',
        'edad',
        'id_user',
        'cedula',
        'fecha_nacimiento',
        'imagen'
    ];

    public function ususario()
    {
        return $this->belongsTo(User::class , 'id');
    }
    
}
