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

    public function verCategoria($idCategoria)
    {
        //Necesito una consulta que me traiga todas las entradas que contengan la categoria que estoy pidiendo
        $listaDeEntradasPorCategoria = Entrada::where('categoria_id', $idCategoria)->orderBy('created_at', 'desc')->get();
        dd($listaDeEntradasPorCategoria);


        return view('webpage.categoriaslist', compact( 'listaDeEntradasPorCategoria'));
    }

    public function verEntrada()
    {
        $entradas = Entrada::orderBy('created_at', 'desc')->get(); // Obtener todas las entradas
        return view('webpage.entradaslist', compact('entradas'));
    }



    public function show($idEntrada)
    {

        $categoriasFijas = Category::all();
        $entrada = Entrada::findOrFail($idEntrada);
        $entradasAleatorias = Entrada::inRandomOrder()->take(3)->get();

        if (!$entrada) {
            return redirect()->route('web-page.principal')->with('error', 'Entrada no encontrada');
        }

        return view('webpage.show', [
            'titulo' => $entrada->titulo,
            'contenido' => $entrada->contenido,
            'descripcion' => $entrada->descripcion,
            'imagen' => $entrada->imagen,
            'categoria' => $entrada->categoriaInfo ? $entrada->categoriaInfo->nombre : 'Sin categoría', // Usar categoriaInfo()
            'fecha' => $entrada->fecha_publicacion,
            'categoriasFijas' => $categoriasFijas,
            'entradasAleatorias' => $entradasAleatorias,
        ]);
    }

}
