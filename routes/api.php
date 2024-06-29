<?php

use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\OrganizacionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD de movimientos
Route::get('/movimientos', [MovimientoController::class, 'index']);
Route::get('/movimientos/{id}', [MovimientoController::class, 'show']);
Route::post('/movimientos', [MovimientoController::class, 'store']);
Route::put('/movimientos/{id}', [MovimientoController::class, 'update']);
Route::delete('/movimientos/{id}', [MovimientoController::class, 'destroy']);

// CRUD de organizaciones
Route::get('/organizaciones', [OrganizacionController::class, 'index']);
Route::get('/organizaciones/{id}', [OrganizacionController::class, 'show']);
Route::post('/organizaciones', [OrganizacionController::class, 'store']);
Route::put('/organizaciones/{id}', [OrganizacionController::class, 'update']);
Route::delete('/organizaciones/{id}', [OrganizacionController::class, 'destroy']);

// CRUD de productos
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

// CRUD de ubicaciones
Route::get('/ubicaciones', [UbicacionController::class, 'index']);
Route::get('/ubicaciones/{id}', [UbicacionController::class, 'show']);
Route::post('/ubicaciones', [UbicacionController::class, 'store']);
Route::put('/ubicaciones/{id}', [UbicacionController::class, 'update']);
Route::delete('/ubicaciones/{id}', [UbicacionController::class, 'destroy']);

// CRUD de operadores
Route::get('/operadores', [UserController::class, 'index']);
Route::get('/operadores/{id}', [UserController::class, 'show']);
Route::post('/operadores', [UserController::class, 'store']);
Route::put('/operadores/{id}', [UserController::class, 'update']);
Route::delete('/operadores/{id}', [UserController::class, 'destroy']);