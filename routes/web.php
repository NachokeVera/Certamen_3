<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\AdministradorCuentasController;
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

Route::get('/CrearCuenta', [CrearCuentaController::class, 'vistaCrear'])->name('artista.crearCuenta');
Route::post('/CrearCuenta', [CrearCuentaController::class, 'registrar'])->name('artista.registrar');

/* login */

Route::get('/Login', [LoginController::class, 'vistaLogin'])->name('artista.login');
Route::post('/Login', [LoginController::class, 'iniciar'])->name('artista.iniciar');
Route::get('/Logout', [LoginController::class, 'logout'])->name('artista.logout');

/* artista */
Route::get('/subir-fotografia', [ImagenController::class,'foto'])->name('artista.subir_foto');
Route::post('/subir-fotografia', [ImagenController::class,'guardar'])->name('artista.guardar_foto');

/* administrador */
Route::get('/AdministradorCuentas', [AdministradorCuentasController::class, 'cuentas'])->name('administrador.AdministradorCuentas');