<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function principal()
    {
        return view('webpage.principal');
    }
}
