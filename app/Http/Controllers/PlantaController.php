<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\planta;
use App\Imagen;

class PlantaController extends Controller
{
        public function index(Request $request)
    {
        $imagenes = Imagen::all();
        return view('planta.index', ['imagens' => $imagenes]);
    }
}
