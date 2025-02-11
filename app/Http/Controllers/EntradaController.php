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
        try {
            $nuevaEntrada = new Entrada();
            $nuevaEntrada->titulo = $request->input('titulo');
            $nuevaEntrada->descripcion = $request->input('descripcion');
            $nuevaEntrada->contenido = $request->input('contenido');
            $nuevaEntrada->categoria_id = $request->input('categoria_id');
            $nuevaEntrada->fecha_publicacion = $request->input('fecha_publicacion');
            $nuevaEntrada->estado = $request->input('estado');
            $nuevaEntrada->save();ave();

            return redirect()->route('entrada.lista')->with('success', 'Entrada creada exitosamente.');
        } catch (\Exception $e) {

            return redirect()->back()->withErrors('Error al crear la entrada. Por favor, inténtalo de nuevo.');
        }
    }

    public function update(Request $request, $idEntrada)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'contenido' => 'nullable|string|max:500',
            'categoria_id' => 'nullable|integer',
            'fecha_publicacion' => 'nullable|date',
            'estado' => 'nullable|string|max:500',
        ]);

        try{

            $entrada = Entrada::where('id', $idEntrada)->first();
            $entrada->update($validated);


            return redirect()->route('entrada.lista')->with('success', 'Entrada actualizada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors( 'Error');

        }

    }

    public function destroy($id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->delete();

        return redirect()->route('entrada.lista')->with('success', 'Entrada eliminada correctamente');
    }


}
