<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenRTX extends Model
{
    use HasFactory;

    protected $fillable = [
        'DEferaEPH',
        'DCilindroCYL',
        'DEjeAXIS',
        'DADD',
        'IEferaSPH',
        'ICilindroCLY',
        'IEjeAXIS',
        'IADD',
        'id_optometrista',
        'id_cliente',
        'id_agenda',
        'id_opstometrista_usuarios'
    ];
}
