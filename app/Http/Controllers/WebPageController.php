<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entrada;
use Illuminate\Http\Request;

class WebPageController extends Controller
{


    public function principal()
    {

        $categoriasFijas = Category::all();
        $ultimasEntradas = Entrada::orderBy('created_at', 'desc')->take(4)->get();
        $entradasAleatorias = Entrada::inRandomOrder()->take(3)->get();

        return view('webpage.principal', compact('categoriasFijas', 'ultimasEntradas' , 'entradasAleatorias'));
    }

    public function categoriasList()
    {
        $categoriasFijas = Category::all();
        $ultimasEntradas = Entrada::all();

        return view('webpage.categoriaslist', compact('categoriasFijas', 'ultimasEntradas'));
    }

    public function show($idEntrada)
    {

        $categoriasFijas = Category::all();
        $entrada = Entrada::findOrFail($idEntrada);


        if (!$entrada) {
            return redirect()->route('web-page.principal')->with('error', 'Entrada no encontrada');
        }

        return view('webpage.show', [
            'titulo' => $entrada->titulo,
            'contenido' => $entrada->contenido,
            'imagen' => $entrada->imagen,
            'categoria' => $entrada->categoriaInfo ? $entrada->categoriaInfo->nombre : 'Sin categoría', // Usar categoriaInfo()
            'fecha' => $entrada->fecha_publicacion,
            'categoriasFijas' => $categoriasFijas,
        ]);
    }

}
