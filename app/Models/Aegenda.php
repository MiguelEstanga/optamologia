<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aegenda extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre_completo',
        'Telefono',
        'direccion',
        'cedula',
        'sintomas',
        'id_user',
        'id_patalogia_ocular',
        'id_salud_ocular',
        'id_salud_general',
        'id_disponibilidad',
        'id_estado',
        'fecha'
    ];

    public function hora()
    {
        return $this->belongsTo(Disponibilidad::class, 'id_disponibilidad');
    }

    public function salud_ocular()
    {
        return $this->belongsTo(SaludOcular::class, 'id_salud_ocular');
    }

    public function salud_general()
    {
        return $this->belongsTo(SaludGeneral::class, 'id_salud_general');
    }

    public function patalogia_ocular()
    {
        return $this->belongsTo(PatalogiaOcular::class, 'id_patalogia_ocular');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
