<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
Route::get('/users', [UserController::class, 'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users',[ApiController::class, 'users']);
Route::get('login',[ApiController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Rutas accesibles solo por administradores
    Route::middleware('is_admin')->group(function () {
        Route::get('/admin-dashboard', 'AdminController@dashboard');
    });

    // Rutas accesibles por todos los usuarios autenticados
    Route::get('/user-dashboard', 'UserController@dashboard');
});

use App\Http\Controllers\RobotController;

Route::post('/update-state', [RobotController::class, 'updateState']);



