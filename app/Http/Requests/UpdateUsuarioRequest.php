<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $usuarioId = $this->route('usuario'); // {usuario} en la ruta

        return [
            'username'   => 'sometimes|string|max:50|unique:usuario,username,' . $usuarioId,
            'contraseña' => 'sometimes|string|min:6',
            'email'      => 'sometimes|email|unique:usuario,email,' . $usuarioId,
            'role_id'      => 'required|integer',
        ];
    }
}
