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

    public function show($idEntrada)
    {

        $entrada = Entrada::findOrFail($idEntrada);


        if (!$entrada) {
            return redirect()->route('web-page.principal')->with('error', 'Entrada no encontrada');
        }

        return view('webpage.show', [
            'titulo' => $entrada->titulo,
            'contenido' => $entrada->contenido,
            'imagen' => $entrada->imagen,
            'categoria' => $entrada->categoria ? $entrada->categoria->nombre : 'Sin categoría',
            'fecha' => $entrada->fecha_publicacion
        ]);
    }

}
