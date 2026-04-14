<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\PaginaController;

// Rutas de las páginas principales
Route::get('/',         [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/menu',     [PaginaController::class, 'menu'])->name('menu');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

// Rutas para el sistema de PQRS (Mensajes)
Route::post('/pqrs',              [PqrsController::class, 'store'])->name('pqrs.store');
Route::get('/mensajes',           [PqrsController::class, 'index'])->name('mensajes.index');
Route::get('/mensajes/{id}/edit', [PqrsController::class, 'edit'])->name('mensajes.edit');
Route::put('/mensajes/{id}',      [PqrsController::class, 'update'])->name('mensajes.update');
Route::delete('/mensajes/{id}',   [PqrsController::class, 'destroy'])->name('mensajes.destroy');