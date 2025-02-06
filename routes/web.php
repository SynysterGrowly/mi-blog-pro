<?php

use App\Http\Controllers\PracticaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PracticaController::class, 'index'])->name('practica.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categoria/form', [CategoryController::class, 'form'])->name('categoria.form');
Route::get('/categoria/index', [CategoryController::class, 'index'])->name('categoria.index');



