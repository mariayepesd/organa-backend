<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';

    protected $fillable = [
        'fecha_orden',
        'fecha_domicilio',
        'estado',
        'cliente_id',
        'suscripcion_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function suscripcion()
    {
        return $this->belongsTo(Suscripcion::class, 'suscripcion_id');
    }

    public function pago()
    {
        return $this->hasOne(Pago::class, 'orden_id');
    }

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class, 'orden_id');
    }
}

