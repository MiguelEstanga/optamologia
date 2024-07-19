<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ventas',
        'id_productos'
    ];

    public function venta(){
        return $this->belongsTo(Venta::class ,'id_ventas');
    }
    
    public function producto()
    {
        return $this->belongsTo(Producto::class , 'id_productos');
    }
}
