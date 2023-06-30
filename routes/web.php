<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\ArtistaController;
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


Route::get('/mis-fotos', [ArtistaController::class,'vistaMisFotos'])->name('artista.mis_foto');
Route::get('/mis-fotos/{id}/editar', [ArtistaController::class,'editar'])->name('artista.editar');
Route::put('/mis-fotos/{id}', [ArtistaController::class, 'subirEdit'])->name('artista.subirEdit');
Route::delete('/mis-fotos/{id}', [ArtistaController::class, 'eliminar'])->name('artista.eliminar');
/* administrador */
Route::get('/AdministradorCuentas', [AdministradorCuentasController::class, 'cuentas'])->name('administrador.AdministradorCuentas');
Route::delete('/cuenta/{cuenta}',[AdministradorCuentasController::class,'destroy'])->name('cuenta.destroy');
