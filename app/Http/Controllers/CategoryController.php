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
            $nuevaCategoria->nombre = strip_tags($request->input('nombre')); // Elimina etiquetas HTML
            $nuevaCategoria->descripcion = strip_tags($request->input('descripcion')); // Elimina etiquetas HTML

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
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $categoria = Category::findOrFail($id);
        $categoria->nombre = $request->nombre; // Guardar con HTML
        $categoria->descripcion = $request->descripcion;

        // Manejo de imagen
        if ($request->hasFile('imagen')) {
            if ($categoria->imagen) {
                Storage::delete('public/'.$categoria->imagen);
            }
            $imagenPath = $request->file('imagen')->store('categorias', 'public');
            $categoria->imagen = $imagenPath;
        }

        $categoria->save();

        return redirect()->route('categorias.edit', $categoria->id)->with('success', 'Categoría actualizada correctamente');
    }


    public function destroy($idCategoria)
    {
        $categoria = Category::findOrFail($idCategoria);
        $categoria->delete();
        return redirect()->route('categorias.lista')->with('success', 'Categoría eliminada exitosamente.');
    }




}
