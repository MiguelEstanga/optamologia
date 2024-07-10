<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'visto',
        'titulo',
        'ruta',
        'id_user',
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class , 'id_user');
    }
}
