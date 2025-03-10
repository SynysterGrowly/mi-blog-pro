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
        $ultimasEntradas = Entrada::where('estado', 'finalizado')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        $entradasAleatorias = Entrada::where('estado', 'finalizado')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('webpage.principal', compact('categoriasFijas', 'ultimasEntradas', 'entradasAleatorias'));
    }

    public function verCategoria($idCategoria = null)
    {
        $categoriasDisponibles = Category::all();

        if ($idCategoria) {
            $categoriaSeleccionada = Category::findOrFail($idCategoria);
            $entradasFiltradas = Entrada::where('categoria_id', $idCategoria)
                ->where('estado', 'finalizado')
                ->with('categoriaInfo')
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $categoriaSeleccionada = null;
            $entradasFiltradas = collect();
        }

        return view('webpage.categoriaslist', compact('categoriasDisponibles', 'categoriaSeleccionada', 'entradasFiltradas'));
    }

    public function verEntrada()
    {
        $entradas = Entrada::with('categoriaInfo')
            ->where('estado', 'finalizado')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('webpage.entradaslist', compact('entradas'));
    }

    public function mostrarTodasLasCategorias()
    {
        $categoriasFijas = Category::all();
        return view('webpage.categoriasPrincipal', compact('categoriasFijas'));
    }

    public function show($idEntrada)
    {
        $categoriasFijas = Category::all();


        $entrada = Entrada::where('id', $idEntrada)
            ->where('estado', 'finalizado')
            ->first();

        if (!$entrada) {
            return redirect()->route('web-page.principal')->with('error', 'Entrada no encontrada o no está finalizada.');
        }


        $entradasAleatorias = Entrada::where('estado', 'finalizado')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('webpage.show', [
            'titulo' => $entrada->titulo,
            'contenido' => $entrada->contenido,
            'descripcion' => $entrada->descripcion,
            'imagen' => $entrada->imagen,
            'categoria' => $entrada->categoriaInfo ? $entrada->categoriaInfo->nombre : 'Sin categoría',
            'fecha' => $entrada->fecha_publicacion,
            'categoriasFijas' => $categoriasFijas,
            'entradasAleatorias' => $entradasAleatorias,
        ]);
    }
}
