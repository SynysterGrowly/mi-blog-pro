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

        $entradas = Entrada::orderBy('created_at', 'desc')->get();



        return view('entrada.lista', compact('entradas'));
    }

    public function update(Request $request, $idEntrada)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'contenido' => 'nullable|string',
            'categoria_id' => 'nullable|integer|exists:categorias,id',
            'fecha_publicacion' => 'nullable|date',
            'estado' => 'nullable|string|max:500',
        ]);

        try {
            $entrada = Entrada::findOrFail($idEntrada);


            $entrada->titulo = strip_tags($request->titulo);
            $entrada->descripcion = strip_tags($request->descripcion);
            $entrada->contenido = $request->contenido;

            $entrada->categoria_id = $request->categoria_id;
            $entrada->fecha_publicacion = $request->fecha_publicacion;
            $entrada->estado = $request->estado;

            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->store('imagenes', 'public');
                $entrada->imagen = $imagenPath;
            }

            $entrada->save();

            return redirect()->route('entrada.lista', $idEntrada)->with('success', 'Entrada actualizada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error. Por favor, inténtalo de nuevo.');
        }
    }



    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'contenido' => 'required|string',
            'categoria_id' => 'nullable|exists:categorias,id',
            'fecha_publicacion' => 'nullable|date',
            'estado' => 'nullable|string|max:500',
            'imagen' => 'nullable|image|max:2048',
        ]);

        try {
            $nuevaEntrada = new Entrada();
            $nuevaEntrada->titulo = $request->titulo;
            $nuevaEntrada->descripcion = $request->descripcion;
            $nuevaEntrada->contenido = $request->contenido;
            $nuevaEntrada->categoria_id = $request->categoria_id;
            $nuevaEntrada->fecha_publicacion = $request->fecha_publicacion;
            $nuevaEntrada->estado = $request->estado;
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
