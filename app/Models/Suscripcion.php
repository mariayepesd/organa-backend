<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = 'suscripciones';

    protected $fillable = [
        'tipo',
        'fecha_inicio',
        'fecha_fin',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'suscripcion_id');
    }
}
