<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LibroCRUDController;
use App\Http\Controllers\PrestamosCRUDController;
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
    return view('welcome');
});

Route::get('/home', [Controller::class,'home'])->name('home');

Route::get('/addLibro', [LibroCRUDController::class, 'mostrarFormularioAdd'])->name('FormularioAddLibro');

Route::get('/actualizarLibro', [LibroCRUDController::class, 'mostrarFormularioActualizar'])->name('FormularioActualizarLibro');


Route::post('/addLibroPost', [LibroCRUDController::class, 'addLibro'])->name('addLibro');

Route::post('/actualizarLibroPost', [LibroCRUDController::class, 'actualizarLibro'])->name('actualizarLibro');


Route::get('/showLibros', [LibroCRUDController::class,'showLibros'])->name('showLibros');

Route::get('/verLibro', [LibroCRUDController::class,'verLibro'])->name('verLibro');
//-------------------------------

Route::get('/addPrestamo', [PrestamosCRUDController::class, 'mostrarFormularioAdd'])->name('FormularioAddPrestamo');

Route::get('/actualizarPrestamo', [PrestamosCRUDController::class, 'mostrarFormularioActualizar'])->name('FormularioActualizarPrestamo');


Route::post('/addPrestamoPost', [PrestamosCRUDController::class, 'addPrestamo'])->name('addPrestamo');

Route::post('/actualizarPrestamo', [PrestamosCRUDController::class, 'actualizarPrestamo'])->name('actualizarPrestamo');


Route::get('/showPrestamos', [PrestamosCRUDController::class,'showPrestamos'])->name('showPrestamos');

Route::get('/verPrestamo', [PrestamosCRUDController::class,'verPrestamo'])->name('verPrestamo');

