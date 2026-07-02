<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access;

class SensorController extends Controller
{
    public function trigger(Request $request)
    {
        // Validación básica según el contrato de API actualizado para RFID
        $validated = $request->validate([
            'device_id' => 'required|string',
            'card_uid'  => 'required|string',
        ]);

        $uid = $validated['card_uid'];

        // ==========================================
        // LÓGICA SIMULADA DE LA API DEL GIMNASIO (Mock)
        // ==========================================
        if ($uid === 'DB38E800') {
            // Simulamos que la tarjeta blanca tiene la cuota pagada
            $status = 'approved';
            $message = 'Acceso Permitido. Cuota al día.';
            $memberName = 'Gabriel Pineda (Llavero)';
        } else {
            // Simulamos que cualquier otra tarjeta (o tu tarjeta blanca) está impaga
            $status = 'rejected';
            $message = 'Acceso Denegado. Consulte en administración.';
            $memberName = 'Usuario de Prueba (Tarjeta)';
        }

        // ==========================================
        // GUARDAR EN NUESTRA BASE DE DATOS
        // ==========================================
        Access::create([
            'card_uid' => $uid,
            'status' => $status,
            'gym_member_name' => $memberName,
        ]);

        // Retornar la respuesta al script de Python
        return response()->json([
            'status' => $status,
            'message' => $message,
            'action_taken' => $status === 'approved' ? 'door_opened' : 'door_kept_closed',
            'data_received' => $validated
        ], 200);
    }
}
