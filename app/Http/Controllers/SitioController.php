<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planta;
use App\Rede;
use App\Reporte;
use Session;

class SitioController extends Controller
{

    public function view()
    {
        return view('PublicGraf/PagePublic');
    }

    public function viewdoc()
    {
        return view('doc/documentacion');
    }

    public function viewprivate()
    {
        return view('login');
    }

}
