<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'usuarios';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'contraseña',
        'email',
        'role_id',
    ];

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'id');
    }

    public function chef()
    {
        return $this->hasOne(Chef::class, 'id');
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class, 'generado_por');
    }

    public function roles() {

        return $this->hasOne(Rol::class, 'id', 'role_id');

    }
}
