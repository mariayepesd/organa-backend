<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\KafkaProducerService;

class PedidoController extends Controller
{
    public function store(Request $request, KafkaProducerService $kafka)
    {
        try {

            $order = [
                'id' => uniqid(),
                'cliente' => $request->input('cliente'),
                'producto' => $request->input('producto'),
                'cantidad' => $request->input('cantidad'),
                'fecha' => now()->toDateTimeString(),
                'fecha_domicilio' => $request->input('fecha_domicilio'),
            ];

            $kafka->send(env('KAFKA_TOPIC'), $order);

            return response()->json([
                'success' => true,
                'message' => 'Pedido generado y enviado a Kafka correctamente.',
                'pedido' => $order,
            ]);

        } catch(\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Error al procesar el pedido: ' . $e->getMessage(),
            ], 500);

        }
    }
}
