<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpstometristaUsuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_optometrista',
        'id_cliente',
        'id_agenda'
    ];


    public function optometrista()
    {
        return $this->belongsTo(User::class , 'id_optometrista');
    }

    public function cliente()
    {
        return $this->belongsTo(User::class , 'id_cliente');
    }

    public function agenda()
    {
        return $this->belongsTo(Aegenda::class , 'id_agenda');
    }

    public function examen()
    {
        return $this->belongsTo(ExamenRTX::class , 'id_opstometrista_usuarios');
    }
}
