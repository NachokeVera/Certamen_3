<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\LoginController;
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
/* inicio */
Route::get('/',[InicioController::class,'index'])->name('inicio.index');



/* crear cuenta */

Route::get('/CrearCuenta', [CrearCuentaController::class, 'crear'])->name('artista.CrearCuenta');

/* login */

Route::get('/Login', [LoginController::class, 'login'])->name('artista.Login');
