<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\planta;

class PlantaController extends Controller
{
        public function index(Request $request)
    {
        $rede = Rede::all();
        return view('planta.index', ['list' => $redes]);
    }
}
