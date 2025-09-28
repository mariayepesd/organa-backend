<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';

    protected $fillable = [
        'cantidad',
        'fecha_pago',
        'metodo_pago',
        'orden_id',
        'estado',
    ];

    public function orden()
    {
        return $this->belongsTo(Orden::class, 'orden_id');
    }
}
