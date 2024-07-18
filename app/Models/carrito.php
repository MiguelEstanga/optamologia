<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_productos',
        'cantidad'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class , 'id_productos');
    }

   
}
