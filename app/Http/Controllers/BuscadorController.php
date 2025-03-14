<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Category;


class BuscadorController extends Controller

{
    public function buscar(Request $request)
    {
        $query = $request->input('query');

      //Manera de traer las palabra clave sin tener que ser identico, se encontrarán más resultados

        $categorias = Category::where('nombre', 'LIKE', "%{$query}%")->get();
        $entradas = Entrada::where('titulo', 'LIKE', "%{$query}%")->get();

        return view('webpage.resultados', compact('entradas', 'categorias', 'query'));
    }
}
