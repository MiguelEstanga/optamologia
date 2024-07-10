<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    
    use HasFactory, Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefono',
        'id_estado'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function perfil()
    {
        return $this->hasOne(Perfil::class , 'id_user');
    }

    public function misCitas()
    {
        return $this->hasMany(Aegenda::class , 'id_user');
    }

    public function cita()
    {
        return $this->belongsTo(Aegenda::class , 'id_user');
    }

    public function notificaciones_cliente()
    {
        return $this->hasMany(Notificacion::class , 'id_user');
    }

     public function role()
     {
         return $this->belongsToMany(Role::class);
     }

     public function estado()
     {
         return $this->belongsTo(Estado::class  , 'id_estado');
     }

     public function notificaciones_optometrista()
     {
        return $this->hasMany(Notificacion::class , 'id_optometrista');
     }

     public function asiganacion_optometrista()
     {
        return $this->hasMany(OpstometristaUsuario::class , 'id_optometrista');
     }

     public function asiganacion_cliente()
     {
        return $this->hasMany(OpstometristaUsuario::class , 'id_cliente');
     }
}
