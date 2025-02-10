<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller


{
    public function form()
    {
        return view('categorias.form');
    }
    public function lista()
    {
        $categorias = Category::all();

        return view('categorias.lista', compact('categorias'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
        ]);

        try {
            Category::create($validated);

            return redirect()->route('categorias.lista')->with('success', 'Categoría creada exitosamente.');
        } catch (\Exception $e) {

            return redirect()->back()->withErrors('Error al crear la categoría. Por favor, inténtalo de nuevo.');
        }
    }

    public function editar($idCategoria){

        $categoria = Category::where('id', $idCategoria)->first();


        return view('categorias.edit' , compact('categoria'));
    }





}
