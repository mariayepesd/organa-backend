<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'contraseña',
        'email',
        'roles',
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
}
