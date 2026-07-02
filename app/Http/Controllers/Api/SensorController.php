<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function trigger(Request $request)
    {
        // Validación básica según el contrato de API actualizado para RFID
        $validated = $request->validate([
            'device_id' => 'required|string',
            'card_uid'  => 'required|string',
        ]);

        // TODO: En la Fase 2/3 (cuando Guillermo termine los modelos)
        // aquí buscaremos en la DB y crearemos o cerraremos un 'Access'.
        // También dispararemos un evento de Livewire para el Dashboard.

        return response()->json([
            'status' => 'success',
            'message' => 'Señal del sensor procesada correctamente',
            'action_taken' => 'dashboard_alert_triggered',
            'data_received' => $validated
        ], 200);
    }
}
