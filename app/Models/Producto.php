<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable =[
        'codigo',
        'marca',
        'cantidad',
        'descripcion',
        'tipo',
        'descripcion_montura',
        'precio',
        'imagen',
        'id_estado',
        'venta',
        'nombre'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class , 'id_estado');
    }
}
