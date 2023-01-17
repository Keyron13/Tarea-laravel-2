<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;
use App\Http\Controllers\ProvinciaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/frutas', [FrutaController::class, 'index']);
Route::get('/frutas/crear', [FrutaController::class, 'create']);
Route::post('/frutas', [FrutaController::class, 'store']);
Route::get('/frutas/{id}', [FrutaController::class, 'edit']);
Route::put('/frutas/{id}', [FrutaController::class, 'update']);
Route::delete('/frutas/{id}', [FrutaController::class, 'destroy']);

Route::get('/provincias', [ProvinciaController::class, 'index']);
Route::get('/provincias/crear', [ProvinciaController::class, 'create']);
Route::post('/provincias', [ProvinciaController::class, 'store']);
Route::get('/provincias/{id}', [ProvinciaController::class, 'edit']);
Route::put('/provincias/{id}', [ProvinciaController::class, 'update']);
Route::delete('/provincias/{id}', [ProvinciaController::class, 'destroy']);
