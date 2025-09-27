<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = [
        'nombre',
        'fecha_inicio_semana',
        'fecha_fin_semana',
        'chef_id',
    ];

    public function chef()
    {
        return $this->belongsTo(Chef::class, 'chef_id');
    }

    public function platos()
    {
        return $this->hasMany(Plato::class, 'menu_id');
    }
}
