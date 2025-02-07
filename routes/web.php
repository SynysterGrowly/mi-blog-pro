<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntradaController;


Route::get('/', [PracticaController::class, 'index'])->name('practica.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/proyecto/categoria/alta', [CategoryController::class, 'form'])->name('categoria.form');
Route::get('/categoria/lista', [CategoryController::class, 'lista'])->name('categoria.lista');


Route::get('/entrada/form' , [EntradaController::class, 'form'])->name('entrada.form');
Route::get('/entrada/lista', [EntradaController::class, 'lista'])->name('entrada.lista');



