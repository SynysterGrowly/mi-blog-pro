<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {


        return view('categorias.index');
    }

    public function form()
    {
        return view('categorias.form');
    }

}
