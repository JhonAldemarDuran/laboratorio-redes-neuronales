<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\planta;
use App\Imagen;
use Auth;

class PlantaController extends Controller
{
        public function index(Request $request)
    {
        $imagenes = Auth::user()->imagens()->get();
        return view('planta.index', ['imagens' => $imagenes]);
    }
}
