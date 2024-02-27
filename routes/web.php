<?php
use App\Http\Controllers\tiposAsientosController;
use App\Http\Controllers\vueloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vuelosAsientosController;

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

 
Route::post('/inicio', [vueloController::class, 'store'])->name('inicio.store');

Route::get('/inicio', [vueloController::class, 'store'])->name('inicio.store');
