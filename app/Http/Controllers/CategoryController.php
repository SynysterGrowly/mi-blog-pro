<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function form()
    {

        return view('categoria.form');
    }

    public function lista()

    {
        $categoria = Category::all();
        return view('categoria.lista', compact('categoria'));
    }


}
