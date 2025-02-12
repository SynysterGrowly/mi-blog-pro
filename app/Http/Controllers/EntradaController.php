<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Entrada;



class EntradaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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


    public function store(Request $request)
    {

        try {

            $nuevaEntrada = new Entrada();

            $nuevaEntrada->titulo = $request->input('titulo');
            $nuevaEntrada->descripcion = $request->input('descripcion');
            $nuevaEntrada->contenido = $request->input('contenido');
            $nuevaEntrada->categoria_id = $request->input('categoria_id');

            if ($request->hasFile('imagen')) {
                $rutaImagen = $request->file('imagen')->store('imagenes', 'public');
                $nuevaEntrada->imagen = $rutaImagen;
            }
            $nuevaEntrada->fecha_publicacion = $request->input('fecha_publicacion');
            $nuevaEntrada->estado = $request->input('estado');
            $nuevaEntrada->usuario_id = auth()->id();
            $nuevaEntrada->save();

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
            'imagen'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria_id' => 'nullable|integer',
            'fecha_publicacion' => 'nullable|date',
            'estado' => 'nullable|string|max:500',
            'usuario_id' => 'nullable|integer',

        ]);

        try{

            $entrada = Entrada::where('id', $idEntrada)->first();
            $entrada->update($validated);

                return redirect()->route('entrada.form')->with('success', 'Entrada Actualizadp exitosamente.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors('Error . Por favor, inténtalo de nuevo.');

            }

    }
    public function destroy($id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->delete();

        return redirect()->route('entrada.lista')->with('success', 'Entrada eliminada correctamente');
    }


}
