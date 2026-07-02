<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access;
use Carbon\Carbon;

class GymApiController extends Controller
{
    /**
     * Devuelve el último escaneo de tarjeta ocurrido en los últimos 15 segundos.
     * Creado específicamente para el enrolamiento en el sistema del gimnasio (HaaS).
     */
    public function latestScan()
    {
        // Buscamos el último acceso creado hace 15 segundos máximo
        $latestAccess = Access::where('created_at', '>=', Carbon::now()->subSeconds(15))
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$latestAccess) {
            return response()->json([
                'success' => false,
                'message' => 'Esperando tarjeta... (Ninguna detectada en los ultimos 15 segundos)'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'card_uid' => $latestAccess->card_uid,
            'scanned_at' => $latestAccess->created_at->toDateTimeString(),
        ], 200);
    }
}
