<?php

use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlatoController;

Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('platos', PlatoController::class);
Route::apiResource('menus', MenuController::class);
Route::apiResource('ingredientes', IngredienteController::class);
