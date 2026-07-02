<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorController;
use App\Http\Controllers\Api\GymApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta para recibir los escaneos del Arduino
Route::post('/sensor/trigger', [SensorController::class, 'trigger']);

// Rutas de integración HaaS para el Gimnasio
Route::get('/gym/latest-scan', [GymApiController::class, 'latestScan']);
