<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'restricciones_dietarias',
        'direccion',
        'telefono',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id');
    }

    public function suscripciones()
    {
        return $this->hasMany(Suscripcion::class, 'cliente_id');
    }

    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'cliente_id');
    }
}
