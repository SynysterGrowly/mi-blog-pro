<?php

namespace App\Http\Controllers;

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
        $entrada = Entrada::all();
        return view('entrada.lista', compact('entrada'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'contenido' => 'nullable|string',
            'categoria_id' => 'required|integer|exists:categorias,id',
            'fecha_publicacion' => 'nullable|date',
            'estado' => 'required|in:proceso,finalizado',
        ]);

        try {
            Entrada::create([
                'titulo' => $validated['titulo'],
                'descripcion' => $validated['descripcion'],
                'contenido' => $validated['contenido'],
                'categoria_id' => $validated['categoria_id'],
                'fecha_publicacion' => $validated['fecha_publicacion'] ?? now(),
                'estado' => $validated['estado'],
                'usuario_id' => Auth::id() ?? 1,
            ]);

            return redirect()->route('entrada.lista')->with('success', 'Entrada creada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error al crear la entrada.');
        }
    }


    public function editar($idEntrada)
    {
        $entrada = Entrada::findOrFail($idEntrada);
        $categorias = Category::all();

        return view('entrada.editar', compact('entrada', 'categorias'));
    }


    public function update(Request $request, $idEntrada)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'contenido' => 'nullable|string|max:500',
            'fecha_publicacion' => 'nullable|date',
            'categoria_id' => 'nullable|integer',
            'estado' => 'nullable|string|max:500',

        ]);

        try {
            $entrada = Entrada::where('id', $idEntrada)->first();
            $entrada->update($validated);

            return redirect()->route('entrada.lista')->with('success', 'Entrada actualizada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error al actualizar la entrada.');
        }
    }


    public function destroy($idEntrada)
    {
        try {
            $entrada = Entrada::findOrFail($idEntrada);
            $entrada->delete();

            return redirect()->route('entrada.lista')->with('success', 'Entrada eliminada correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error al eliminar la entrada.');
        }
    }
}
