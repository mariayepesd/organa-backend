<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index() {

        try {

            return response()->json(Usuario::all(), 200);

        } catch (\Throwable $e) {

            return response()->json(['error' => 'Error al listar usuarios', 'message' => $e->getMessage()], 500);
        }
    }

    public function store(StoreUsuarioRequest $request) {

        try {

            $usuario = Usuario::create([

                'username'   => $request->username,
                'contraseña' => Hash::make($request->contraseña),
                'email'      => $request->email,
                'role_id'    => $request->role_id

            ]);

            return response()->json($usuario, 201);

        } catch (\Throwable $e) {

            return response()->json(['error' => 'Error al crear usuario', 'message' => $e->getMessage()], 500);

        }
    }

    public function show($id) {

        try {

            $usuario = Usuario::with('roles')
                            ->findOrFail($id);

            return response()->json($usuario, 200);

        } catch (\Throwable $e) {

            return response()->json(['error' => 'Usuario no encontrado', 'message' => $e->getMessage()], 404);

        }
    }

    public function update(UpdateUsuarioRequest $request, $id) {

        try {

            $usuario = Usuario::findOrFail($id);

            $usuario->update([
                'username'   => $request->username ?? $usuario->username,
                'contraseña' => $request->contraseña ? Hash::make($request->contraseña) : $usuario->contraseña,
                'email'      => $request->email ?? $usuario->email,
                'role_id'      => $request->role_id ?? $usuario->roles,
            ]);

            return response()->json($usuario, 200);

        } catch (\Throwable $e) {

            return response()->json(['error' => 'Error al actualizar usuario', 'message' => $e->getMessage()], 500);

        }
    }

    public function destroy($id) {

        try {

            $usuario = Usuario::findOrFail($id);
            $usuario->delete();

            return response()->json(['message' => 'Usuario eliminado correctamente'], 200);

        } catch (\Throwable $e) {

            return response()->json(['error' => 'Error al eliminar usuario', 'message' => $e->getMessage()], 500);

        }
    }
}
