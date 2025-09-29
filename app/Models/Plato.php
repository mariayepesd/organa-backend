<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table = 'platos';

    protected $fillable = [
        'nombre',
        'categoria',
        'tamaño_porcion',
        'pasos_preparacion',
    ];

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'ingredientes_platos', 'plato_id', 'ingrediente_id');
    }

}
