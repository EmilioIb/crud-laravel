<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class WelcomeController extends Controller
{
    //
    public function __invoke()
    {
        //llamamos a todas las categorias
        $categories = Category::all();
        //renderizamos la ruta welcome y le pasamos las categorias
        return view('welcome', compact('categories'));
    }
}
