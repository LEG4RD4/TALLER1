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

Route::post('/', [PaginaController::class, 'store'])->name('pqrs.store'); 