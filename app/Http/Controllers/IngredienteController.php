<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Http\Requests\StoreUpdateIngredienteRequest;
use Illuminate\Http\JsonResponse;

class IngredienteController extends Controller
{
    public function index(): JsonResponse {

        try {

            return response()->json(Ingrediente::all());

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al listar ingredientes', 'message' => $e->getMessage()], 500);

        }
    }

    public function store(StoreUpdateIngredienteRequest $request): JsonResponse {

        try {

            $ingrediente = Ingrediente::create($request->validated());
            return response()->json($ingrediente, 201);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al crear ingrediente', 'message' => $e->getMessage()], 500);

        }
    }

    public function show(string $id): JsonResponse {

        try {

            $ingrediente = Ingrediente::findOrFail($id);
            return response()->json($ingrediente);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Ingrediente no encontrado', 'message' => $e->getMessage()], 404);

        }
    }

    public function update(StoreUpdateIngredienteRequest $request, string $id): JsonResponse {

        try {

            $ingrediente = Ingrediente::findOrFail($id);
            $ingrediente->update($request->validated());

            return response()->json($ingrediente);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al actualizar ingrediente', 'message' => $e->getMessage()], 500);

        }
    }

    public function destroy(string $id): JsonResponse {

        try {

            $ingrediente = Ingrediente::findOrFail($id);
            $ingrediente->delete();

            return response()->json(['message' => 'Ingrediente eliminado correctamente']);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al eliminar ingrediente', 'message' => $e->getMessage()], 500);
            #prueba 2
        } 
    }
}

