<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\WebPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntradaController;



//Route::get('/', [PracticaController::class, 'index'])->name('practica.index');


Auth::routes();

//DASHBOARD ADMIN
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/proyecto/categoria/alta', [CategoryController::class, 'form'])->name('categorias.form')->middleware('auth');
Route::get('/categoria/lista', [CategoryController::class, 'lista'])->name('categorias.lista');
Route::post('/categoria/store', [CategoryController::class, 'store'])->name('categorias.store')->middleware('auth');
Route::get('/categoria/editar/{idCategoria}', [CategoryController::class, 'editar'])->name('categorias.edit');
Route::patch('/categoria/update/{idCategoria}', [CategoryController::class, 'update'])->name('categorias.update')->middleware('auth');
Route::delete('/categoria/destroy/{idCategoria}', [CategoryController::class, 'destroy'])->name('categorias.destroy');

Route::get('/entrada/form' , [EntradaController::class, 'form'])->name('entrada.form')->middleware('auth');
Route::get('/entrada/lista', [EntradaController::class, 'lista'])->name('entrada.lista');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entrada.store')->middleware('auth');
Route::get('/entrada/editar/{idEntrada}' , [EntradaController::class, 'editar'])->name('entrada.edit');
Route::patch('/entrada/update/{idEntrada}', [EntradaController::class, 'update'])->name('entrada.update')->middleware('auth');
Route::delete('/entrada/destroy/{idEntrada}', [EntradaController::class, 'destroy'])->name('entrada.destroy');



//Pagina WEB
Route::get('/', [WebPageController::class, 'principal'])->name('web-page.principal') ;



