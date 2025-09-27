<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingrediente';

    protected $fillable = [
        'nombre',
        'cantidad',
        'fecha_de_expiracion',
        'plato_id',
    ];

    public function plato()
    {
        return $this->belongsTo(Plato::class, 'plato_id');
    }

    public function inventario()
    {
        return $this->hasOne(Inventario::class, 'ingrediente_id');
    }
}
