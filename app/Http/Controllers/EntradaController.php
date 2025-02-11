<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Entrada;



class EntradaController extends Controller
{
    public function form()
    {
        return view('entrada.form');
    }

    public function lista()
    {

        $entradas = Entrada::all();



        return view('entrada.lista', compact('entradas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'nullable|max:500',
            'contenido' => 'nullable|max:500',
            'categoria_id' => 'required|exists:categorias,id',
            'fecha_publicacion' => 'required|date',
            'estado' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $entrada = new Entrada();
        $entrada->titulo = $validated['titulo'];
        $entrada->descripcion = $validated['descripcion'];
        $entrada->contenido = $validated['contenido'];
        $entrada->categoria_id = $validated['categoria_id'];
        $entrada->fecha_publicacion = $validated['fecha_publicacion'];
        $entrada->estado = $validated['estado'];


        return redirect()->route('entrada.form')->with('success', 'Entrada creada exitosamente.');
    }


    public function update(Request $request, $idEntrada)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'nullable|max:500',
            'contenido' => 'nullable|max:500',
            'categoria_id' => 'required|exists:categorias,id',
            'fecha_publicacion' => 'nullable|date',
            'estado' => 'nullable|in:proceso,finalizado',

        ]);


        return redirect()->route('entrada.lista')->with('success', 'Entrada actualizada exitosamente.');
    }


    public function destroy($id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->delete();

        return redirect()->route('entrada.lista')->with('success', 'Entrada eliminada correctamente');
    }


}
