<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;

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
// * Endpoints ** //

//Route::get("/contacto",[ContactoController::class,'read']);*/

Route::post("/crear",[ContactoController::class,'create']);

Route::post("/usuario",[ContactoController::class,'createUser']);

Route::get("/usuario",[ContactoController::class,'readUser']);

Route::put("/usuario",[ContactoController::class,'update']);


Route::delete("/usuario",[ContactoController::class,'delete']);

/*Route::delete("/usuario",function (Request $request) {
    $message = ["Mensaje:" => "Eliminacion de Usuario Exitosa!"];
    return response()->json($message);
});*/


/*Route::get("/contacto",function(Request $request){

    $message = ["Mensaje" => "Contactos Guardados!"];
    return response()->json($message);
});*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
