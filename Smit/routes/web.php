<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [CarController::class, 'index']);
Route::get('/car/{car}', [CarController::class, 'show']);

Route::delete('dashboard/delete/{car}', [CarController::class, 'destroy']);
Route::get('/dashboard/edit/{car}', [CarController::class, 'edit']);
Route::patch('/dashboard/edit/{car}', [CarController::class, 'update']);

Route::get('/create', [CarController::class, 'create']);
Route::post('/create/store', [CarController::class, 'store']);


