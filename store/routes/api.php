<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\ReciboController;
use Symfony\Component\HttpFoundation\Response;

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

Route::get('/greeting', function () {
    $array = array('hola' => 2, 'test' => 2 );
    return response() -> json($array);
});

Route::controller(ReciboController::class)->group(function(){
    Route::post('/recibo','store');
});

Route::controller(ProductoController::class)->group(function(){
    Route::get('/productos/{categoria}','index');
    Route::post('/producto','store');
    Route::get('/producto/{id}','show');
    Route::put('/producto/{id}','update');
    Route::delete('/producto/{id}','destroy');
});
