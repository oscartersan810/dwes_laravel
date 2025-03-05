<?php

use App\Http\Controllers\MaquinaVirtualController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Maquinas Virtuales
// Ruta para la lista de máquinas virtuales
Route::get('/maquina', [MaquinaVirtualController::class, 'index'])->name('maquina.index');

// Ruta para mostrar el formulario de creación
Route::get('/maquina/nuevamaquina', [MaquinaVirtualController::class, 'create'])->name('maquina.create');

// Ruta para guardar una nueva máquina
Route::post('/maquina', [MaquinaVirtualController::class, 'store'])->name('maquina.store');

// Ruta para mostrar detalles de una máquina específica
Route::get('/maquina/{id}/detallemaquina', [MaquinaVirtualController::class, 'show'])->name('maquina.show');

// Ruta para mostrar el formulario de edición
Route::get('/maquina/{id}/editamaquina', [MaquinaVirtualController::class, 'edit'])->name('maquina.edit');

// Ruta para actualizar una máquina
Route::put('/maquina/{id}', [MaquinaVirtualController::class, 'update'])->name('maquina.update');

// Ruta para eliminar una máquina
Route::delete('/maquina/{id}', [MaquinaVirtualController::class, 'destroy'])->name('maquina.destroy');


// Usuarios
// Ruta para la lista de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');

// Ruta para mostrar el formulario de creación de un usuario
Route::get('/usuarios/nuevousuario', [UsuarioController::class, 'create'])->name('usuario.create');

// Ruta para guardar un nuevo usuario
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuario.store');

// Ruta para mostrar detalles de un usuario específico
Route::get('/usuarios/{id}/detalleusuario', [UsuarioController::class, 'show'])->name('maquina.show');

// Ruta para mostrar el formulario de edición de un usuario
Route::get('/usuarios/{id}/editausuario', [UsuarioController::class, 'edit'])->name('usuario.edit');

// Ruta para actualizar un usuario
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

// Ruta para eliminar un usuario
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

