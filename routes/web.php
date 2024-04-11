<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LibroCRUDController;
use App\Http\Controllers\PrestamosCRUDController;
use App\Http\Controllers\UserController;
use App\Livewire\Autores;
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

Route::get('/addPrestamo', [PrestamosCRUDController::class, 'mostrarFormularioAdd'])->name('FormularioAddPrestamo')->middleware('auth');

Route::get('/actualizarPrestamo', [PrestamosCRUDController::class, 'mostrarFormularioActualizar'])->name('FormularioActualizarPrestamo')->middleware('auth');


Route::post('/addPrestamoPost', [PrestamosCRUDController::class, 'addPrestamo'])->name('addPrestamo')->middleware('auth');

Route::post('/actualizarPrestamo', [PrestamosCRUDController::class, 'actualizarPrestamo'])->name('actualizarPrestamo')->middleware('auth');


Route::get('/showPrestamos', [PrestamosCRUDController::class,'showPrestamos'])->name('showPrestamos')->middleware('auth');

Route::get('/verPrestamo', [PrestamosCRUDController::class,'verPrestamo'])->name('verPrestamo')->middleware('auth');



Route::get('/misPrestamos', [UserController::class, 'misPrestamos'])->middleware('auth');

Route::post('/prestamos', [PrestamosCRUDController::class, 'addPrestamo'])->middleware('auth');




//-------------------------------
Route::get('/autoresLive', [Autores::class])->name('autores');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//------------------------------
Route::get('/alpine', function(){
    return view('alpine');
});

//------------------------------
// Ruta para ver los préstamos del usuario actual
Route::get('/prestamos-autenticado', [UserController::class, 'misPrestamos'])->middleware('auth');
