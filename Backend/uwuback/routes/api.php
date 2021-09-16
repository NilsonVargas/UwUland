<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contactos',[ContactoController::class, 'index']);

Route::post('/contacto',[ContactoController::class,'store']);

Route::delete('/contacto/{paciente_id}',[ContactoController::class,'destroy']);

Route::put('/contacto/{paciente_id}',[ContactoController::class,'update']);

Route::get('/contacto/{paciente}',[ContactoController::class,'show']);




//Route::update();
