<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntradaController;



Route::get('/', [PracticaController::class, 'index'])->name('practica.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/proyecto/categoria/alta', [CategoryController::class, 'form'])->name('categorias.form');
Route::get('/categoria/lista', [CategoryController::class, 'lista'])->name('categorias.lista');
Route::get('/categoria.store', [CategoryController::class, 'store'])->name('categorias.store');
Route::get('/categria/editar/{idCategoria}', [CategoryController::class, 'editar'])->name('categorias.editar');
Route::patch('/categoria/update/{idCategoria}', [CategoryController::class, 'update'])->name('categorias.update');
Route::delete('categoria/destroy/{idCategoria}', [CategoryController::class, 'destroy'])->name('categorias.destroy');


Route::get('/entrada/form' , [EntradaController::class, 'form'])->name('entrada.form');
Route::get('/entrada/lista', [EntradaController::class, 'lista'])->name('entrada.lista');



