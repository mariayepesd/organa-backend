<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';

    protected $fillable = [
        'nombre',
        'cantidad',
        'fecha_de_expiracion',
    ];

    public function inventario()
    {
        return $this->hasOne(Inventario::class, 'ingrediente_id');
    }
}
