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
        $ultimasEntradas = Entrada::orderBy('created_at', 'desc')->take(4)->get();
        $entradasAleatorias = Entrada::inRandomOrder()->take(3)->get();

        return view('webpage.principal', compact('categoriasFijas', 'ultimasEntradas' , 'entradasAleatorias'));
    }

}
