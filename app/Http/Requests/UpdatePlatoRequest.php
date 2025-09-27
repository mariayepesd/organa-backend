<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlatoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'            => 'sometimes|string|max:50',
            'categoria'         => 'sometimes|string|max:50',
            'tamaño_porcion'    => 'sometimes|string|max:50',
            'pasos_preparacion' => 'sometimes|string|max:500',
            'menu_id'           => 'sometimes|exists:menu,id',
        ];
    }
}

