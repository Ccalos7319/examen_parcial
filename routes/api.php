<?php

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
Route::controller(ClienteController::class)->group(function () {
    Route::get('/cliente', 'index');
    Route::get('/cliente/{id}', 'show');
    Route::post('/cliente', 'store');
    Route::put('/cliente/{id}', 'edit');
    Route::delete('/cliente/{id}', 'destroy');
});
Route::controller(VentaController::class)->group(function () {
    Route::get('/venta', 'index');
    Route::get('/venta/{id}', 'show');
    Route::post('/venta', 'store');
    Route::put('/venta/{id}', 'edit');
    Route::delete('/venta/{id}', 'destroy');
});
Route::controller(TrabajadorController::class)->group(function () {
    Route::get('/trabajador', 'index');
    Route::get('/trabajador/{id}', 'show');
    Route::post('/trabajador', 'store');
    Route::put('/trabajador/{id}', 'edit');
    Route::delete('/trabajador/{id}', 'destroy');
});
Route::controller(ArticuloController::class)->group(function () {
    Route::get('/articulo', 'index');
    Route::get('/articulo/{id}', 'show');
    Route::post('/articulo', 'store');
    Route::put('/articulo/{id}', 'edit');
    Route::delete('/articulo/{id}', 'destroy');
});
Route::controller(DetalleIngresoController::class)->group(function () {
    Route::get('/detalle', 'index');
    Route::get('/detalle/{id}', 'show');
    Route::post('/detalle', 'store');
    Route::put('/detalle/{id}', 'edit');
    Route::delete('/detalle/{id}', 'destroy');
});
