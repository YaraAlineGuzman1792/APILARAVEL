<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    /*return view('welcome'); */
    return "Bienvenido a la pagina";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para Arthur
Route::get('/arthurs', [ArthurController::class, 'index']);
Route::get('/arthurs/{id}', [ArthurController::class, 'show']);
Route::post('/arthurs', [ArthurController::class, 'store']);

// Rutas para ComandoDeUsuario
Route::get('/comandos', [ComandoDeUsuarioController::class, 'index']);
Route::get('/comandos/{id}', [ComandoDeUsuarioController::class, 'show']);
Route::post('/comandos', [ComandoDeUsuarioController::class, 'store']);

// Rutas para Estado
Route::get('/estados', [EstadoController::class, 'index']);
Route::get('/estados/{id}', [EstadoController::class, 'show']);
Route::post('/estados', [EstadoController::class, 'store']);

// Rutas para RegistroDeEstado
Route::get('/registros', [RegistroDeEstadoController::class, 'index']);
Route::get('/registros/{id}', [RegistroDeEstadoController::class, 'show']);
Route::post('/registros', [RegistroDeEstadoController::class, 'store']);

// Rutas para SesionDeUsuario
Route::get('/sesiones', [SesionDeUsuarioController::class, 'index']);
Route::get('/sesiones/{id}', [SesionDeUsuarioController::class, 'show']);
Route::post('/sesiones', [SesionDeUsuarioController::class, 'store']);

// Rutas para Usuario
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
