<?php

use App\Http\Controllers\MaquinaVirtualController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para la lista de máquinas virtuales
Route::get('/maquinas', [MaquinaVirtualController::class, 'index'])->name('maquinas.index');

// Ruta para mostrar el formulario de creación
Route::get('/maquinas/nuevamaquina', [MaquinaVirtualController::class, 'create'])->name('maquinas.create');

// Ruta para guardar una nueva máquina
Route::post('/maquinas', [MaquinaVirtualController::class, 'store'])->name('maquinas.store');

// Ruta para mostrar detalles de una máquina específica
Route::get('/maquinas/{id}/detallemaquina', [MaquinaVirtualController::class, 'show'])->name('maquinas.show');

// Ruta para mostrar el formulario de edición
Route::get('/maquinas/{id}/editamaquina', [MaquinaVirtualController::class, 'edit'])->name('maquinas.edit');

// Ruta para actualizar una máquina
Route::put('/maquinas/{id}', [MaquinaVirtualController::class, 'update'])->name('maquinas.update');

// Ruta para eliminar una máquina
Route::delete('/maquinas/{id}', [MaquinaVirtualController::class, 'destroy'])->name('maquinas.destroy');



// Ruta para la lista de máquinas virtuales
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('maquinas.index');

// Ruta para mostrar el formulario de creación
Route::get('/usuarios/nuevousuario', [UsuarioController::class, 'create'])->name('maquinas.create');

// Ruta para guardar una nueva máquina
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('maquinas.store');

// Ruta para mostrar detalles de una máquina específica
Route::get('/usuarios/{id}/detalleusuario', [UsuarioController::class, 'show'])->name('maquinas.show');

// Ruta para mostrar el formulario de edición
Route::get('/usuarios/{id}/editausuario', [UsuarioController::class, 'edit'])->name('maquinas.edit');

// Ruta para actualizar una máquina
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('maquinas.update');

// Ruta para eliminar una máquina
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('maquinas.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
