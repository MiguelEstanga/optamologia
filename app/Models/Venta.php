<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_productos',
        'nombre_cliente',
        'apellido_cliente',
        'cedula',
        'telefono',
        'cantidad',
        'total',
        'fecha'
        
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class , 'id_productos');
    }

   
}
