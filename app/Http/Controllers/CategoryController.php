<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Entrada;


class CategoryController extends Controller


{

    public function form()
    {
        return view('categorias.form');
    }
    public function lista()
    {
        $categorias = Category::orderBy('created_at', 'desc')->get();

        return view('categorias.lista', compact('categorias'));
    }


    public function store(Request $request)
    {
        try {

            $nuevaCategoria = new Category();
            $nuevaCategoria->nombre = $request->input('nombre');
            $nuevaCategoria->descripcion = $request->input('descripcion');

            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->store('categorias', 'public');
                $nuevaCategoria->imagen = $imagenPath;
            }

            $nuevaCategoria->save();

            return redirect()->route('categorias.lista')->with('success', 'Categoría creada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error al crear la categoría. Por favor, inténtalo de nuevo.');
        }
    }

    public function editar($idCategoria)
    {

        $categoria = Category::findOrFail($idCategoria);
        return view('categorias.edit', compact('categoria'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Opcional, solo si el usuario sube una imagen
        ]);

        $categoria = Category::findOrFail($id);
        $categoria->nombre = $request->nombre;

        // Verificar si el usuario subió una nueva imagen
        if ($request->hasFile('imagen')) {
            // Borrar imagen anterior
            if ($categoria->imagen) {
                Storage::delete('public/'.$categoria->imagen);
            }

            // Guardar
            $imagenPath = $request->file('imagen')->store('imagenes_categorias', 'public');
            $categoria->imagen = $imagenPath;
        }


        $categoria->save();


        return redirect()->route('categorias.lista', $categoria->id)->with('success', 'Categoría actualizada correctamente');
    }

    public function destroy($idCategoria)
    {
        $categoria = Category::findOrFail($idCategoria);
        $categoria->delete();
        return redirect()->route('categorias.lista')->with('success', 'Categoría eliminada exitosamente.');
    }




}
