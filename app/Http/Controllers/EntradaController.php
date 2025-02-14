<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{

    public function form()
    {
        $categorias = Category::all();
        return view('entrada.form',compact('categorias'));
    }

    public function lista()
    {

        $entradas = Entrada::all();



        return view('entrada.lista', compact('entradas'));
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
            'usuario_id' => 'nullable|integer',

        ]);

        try {
            $entrada = Entrada::findOrFail($idEntrada);

            $entrada->fill($validated);

            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->store('imagenes', 'public');
                $entrada->imagen = $imagenPath;
            }

            $entrada->save();

            return redirect()->route('entrada.edit', $idEntrada)->with('success', 'Entrada actualizada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error. Por favor, inténtalo de nuevo.');
        }
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
            $nuevaEntrada->usuario_id = $request->user()->id;

            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->store('imagenes', 'public');
                $nuevaEntrada->imagen = $imagenPath;
            }
            $nuevaEntrada->save();

            return redirect()->route('entrada.lista')->with('success', 'Entrada creada exitosamente.');
        } catch (\Exception $e) {

            return redirect()->back()->withErrors('Error al crear la entrada. Por favor, inténtalo de nuevo.');
        }

    }
    public function editar($idEntrada)
    {

        $categorias = Category::all();
        $entrada = Entrada::where('id', $idEntrada)->first();

        return view('entrada.edit', compact('categorias', 'entrada'));
    }


    public function destroy($idEntrada)
    {
        $entrada = Entrada::findOrFail($idEntrada);
        $entrada->delete();

        return redirect()->route('entrada.lista')->with('success', 'Entrada eliminada correctamente');
    }


}
