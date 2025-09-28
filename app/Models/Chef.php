<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $table = 'chefs';

    protected $fillable = ['salario'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'chef_id');
    }
}
