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
Route::get('/dashboard', [CarController::class, 'dashboard']);

Route::delete('dashboard/delete/{car}', [CarController::class, 'destroy']);
Route::get('/dashboard/edit/{car}', [CarController::class, 'edit']);
