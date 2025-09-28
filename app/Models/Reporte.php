<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';

    protected $fillable = [
        'tipo',
        'fecha_generado',
        'contenido',
        'titulo',
        'generado_por',
        'estado',
    ];

    protected $casts = [
        'contenido' => 'array',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'generado_por');
    }
}


