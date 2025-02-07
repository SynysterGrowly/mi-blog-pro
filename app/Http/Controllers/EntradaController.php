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

    public function list()
    {
        $entrada = Entrada::all();
        return view('entrada.', compact('entrada'));
    }

}
