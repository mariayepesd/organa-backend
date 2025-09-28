<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlatoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'            => 'required|string|max:50',
            'categoria'         => 'required|string|max:50',
            'tamaño_porcion'    => 'required|string|max:50',
            'pasos_preparacion' => 'required|string|max:500',
        ];
    }
}
