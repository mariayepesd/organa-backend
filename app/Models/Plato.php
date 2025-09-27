<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table = 'plato';

    protected $fillable = [
        'nombre',
        'categoria',
        'tamaño_porcion',
        'pasos_preparacion',
        'menu_id',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function ingredientes()
    {
        return $this->hasMany(Ingrediente::class, 'plato_id');
    }
}
