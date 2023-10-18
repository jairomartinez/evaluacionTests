<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperaturaController;
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
    return view('welcome');
});

Route::get('/f2c', [TemperaturaController::class, 'mostrarFormF2C'])->name('f2c');
Route::get('/c2f', [TemperaturaController::class,'mostrarFormC2F'])->name('c2f');
Route::get('/c2k', [TemperaturaController::class, 'mostrarFormC2K'])->name('c2k');
Route::get('/k2c', [TemperaturaController::class, 'mostrarFormK2C'])->name('k2c');
