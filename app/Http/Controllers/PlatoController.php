<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Http\Requests\StorePlatoRequest;
use App\Http\Requests\UpdatePlatoRequest;
use Illuminate\Http\JsonResponse;

class PlatoController extends Controller
{
    public function index(): JsonResponse {

        try {

            return response()->json(Plato::all());

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al listar platos', 'message' => $e->getMessage()], 500);

        }
    }

    public function store(StorePlatoRequest $request): JsonResponse {

        try {

            $plato = Plato::create($request->validated());
            return response()->json($plato, 201);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al crear plato', 'message' => $e->getMessage()], 500);

        }
    }

    public function show(string $id): JsonResponse {

        try {

            $plato = Plato::with('ingredientes')
                        ->findOrFail($id);

            return response()->json($plato);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Plato no encontrado', 'message' => $e->getMessage()], 404);

        }
    }

    public function update(UpdatePlatoRequest $request, string $id): JsonResponse {

        try {

            $plato = Plato::findOrFail($id);
            $plato->update($request->validated());

            return response()->json($plato);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al actualizar plato', 'message' => $e->getMessage()], 500);

        }
    }

    public function destroy(string $id): JsonResponse {

        try {

            $plato = Plato::findOrFail($id);
            $plato->delete();

            return response()->json(['message' => 'Plato eliminado correctamente']);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al eliminar plato', 'message' => $e->getMessage()], 500);

        }
    }
}
