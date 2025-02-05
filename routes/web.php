<?php

use App\Http\Controllers\PracticaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PracticaController::class, 'index'])->name('practica.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


