<?php

use App\Http\Controllers\CitasController;
use App\Http\Controllers\MascotasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/alta-mascotas',[MascotasController::class,'index'])->name('alta.mascotas');
    Route::post('/alta-mascotas',[MascotasController::class,'store'])->name('masctoas.store');
    Route::get('/cita-mascotas',[CitasController::class,'index'])->name('mascotas.index');
    Route::post('/cita-mascotas',[CitasController::class,'store'])->name('citas.store');
    Route::get('/citas-usuario',[CitasController::class,'show'])->name('citas.usuario');
    Route::post('/eliminar-cita',[CitasController::class,'destroy'])->name('cita.drestoy');

});



require __DIR__.'/auth.php';
