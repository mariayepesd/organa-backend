<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio_semana',
        'fecha_fin_semana',
        'chef_id',
    ];

    public function chef()
    {
        return $this->belongsTo(Chef::class, 'chef_id');
    }

}
