<?php

use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('platos', PlatoController::class);
Route::apiResource('menus', MenuController::class);
Route::apiResource('ingredientes', IngredienteController::class);
