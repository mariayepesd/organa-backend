<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventarios';

    protected $fillable = [
        'ingrediente_id',
        'nivel_stock',
        'alerta_escasez',
    ];

    public function ingrediente()
    {
        return $this->belongsTo(Ingrediente::class, 'ingrediente_id');
    }
}

