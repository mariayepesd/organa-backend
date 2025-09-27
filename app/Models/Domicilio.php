<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilio';

    protected $fillable = [
        'fecha_domicilio',
        'estado',
        'conductor_id',
        'orden_id',
    ];

    public function orden()
    {
        return $this->belongsTo(Orden::class, 'orden_id');
    }

    public function conductor()
    {
        return $this->belongsTo(Usuario::class, 'conductor_id');
    }
}
