<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreUpdateMenuRequest;
use Illuminate\Http\JsonResponse;

class MenuController extends Controller
{
    public function index(): JsonResponse {

        try {

            return response()->json(Menu::with('chef')->get());

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al listar menús', 'message' => $e->getMessage()], 500);

        }
    }

    public function store(StoreUpdateMenuRequest $request): JsonResponse {

        try {

            $menu = Menu::create($request->validated());
            return response()->json($menu, 201);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al crear menú', 'message' => $e->getMessage()], 500);

        }
    }

    public function show(string $id): JsonResponse {

        try {

            $menu = Menu::with('chef')->findOrFail($id);
            return response()->json($menu);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Menú no encontrado', 'message' => $e->getMessage()], 404);

        }
    }

    public function update(StoreUpdateMenuRequest $request, string $id): JsonResponse {

        try {

            $menu = Menu::findOrFail($id);
            $menu->update($request->validated());

            return response()->json($menu);
        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al actualizar menú', 'message' => $e->getMessage()], 500);

        }
    }

    public function destroy(string $id): JsonResponse {

        try {

            $menu = Menu::findOrFail($id);
            $menu->delete();

            return response()->json(['message' => 'Menú eliminado correctamente']);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error al eliminar menú', 'message' => $e->getMessage()], 500);

        }
    }
}
