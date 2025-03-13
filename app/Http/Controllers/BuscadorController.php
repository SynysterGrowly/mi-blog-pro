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


        $entradas = Entrada::where('titulo', $query)->get();


        $categorias = Category::where('nombre', $query)->get();

        return view('webpage.resultados', compact('entradas', 'categorias', 'query'));
    }
}
