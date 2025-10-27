<?php

use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('platos', PlatoController::class);
Route::apiResource('menus', MenuController::class);
Route::apiResource('ingredientes', IngredienteController::class);
Route::apiResource('pedidos', PedidoController::class);

Route::get('/test-kafka', function () {
    if (extension_loaded('rdkafka')) {
        return [
            'rdkafka_loaded' => true,
            'conf_exists' => class_exists('RdKafka\Conf'),
            'producer_exists' => class_exists('RdKafka\Producer'),
        ];
    }
    return ['rdkafka_loaded' => false];
});

