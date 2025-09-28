<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'username'   => 'required|string|max:50|unique:usuario',
            'contraseña' => 'required|string|min:6',
            'email'      => 'required|email|unique:usuario',
            'role_id'      => 'required|integer',

        ];
    }
}
