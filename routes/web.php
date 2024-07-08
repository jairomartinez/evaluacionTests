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

Route::get('/FarenheintACentigrados',[TemperaturaController::class,'MostrarFarenheintACentigrados']);
Route::post('/FarenheintACentigrados',[TemperaturaController::class,'ConvertirFarenheintACentigrados']);

Route::get('/CentigradosAFahrenheit',[TemperaturaController::class,'MostrarCentigradosAFahrenheit']);
Route::post('/CentigradosAFahrenheit',[TemperaturaController::class,'ConvertirCentigradosAFahrenheit']);

Route::get('/CentigradosAKelvin',[TemperaturaController::class,'MostrarCentigradosAKelvin']);
Route::post('/CentigradosAKelvin',[TemperaturaController::class,'ConvertirCentigradosAKelvin']);
