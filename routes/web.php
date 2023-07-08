<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta mas mostrar en una vista los usuarios registrados //

Route::get('/usuarios', [ContactoController::class, 'index'])->name('usuarios.index');


Route::get('/', function () {
    return view('welcome');
});



