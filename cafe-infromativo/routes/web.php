<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/mensajes', function () {
    return view('mensajes');
})->name('mensajes');

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio'); 
Route::get('/menu', [PaginaController::class, 'menu'])->name('menu'); 
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros'); 
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto'); 
Route::get('/mensaje', [PaginaController::class, 'mensaje'])->name('mensaje'); 