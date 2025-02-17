<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entrada;
use Illuminate\Http\Request;

class WebPageController extends Controller
{

    public function principal()
    {
        $Categories = Category::all();

        return view('webpage.principal');
    }

    public function categoriaData()
    {

        $categoriasFijas = Category::orderBy('id', 'asc')->take(4)->get();

        return view('webpage.principal', compact('categoriasFijas'));
    }

    public function entradaData($idEntrada)
    {
        $datosEntrada = Entrada::findOrFail($idEntrada);
        return view('webpage.entrada', compact('datosEntrada'));
    }
}
