<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Rede;
use App\Reporte;

class ReporteController extends Controller
{
    public function index(Request $request)
    {
        $redes = Rede::all();
        return view('reporte.index', ['list' => $redes]);
    }
     public function show(Request $request,$id)
    {
        try{
            $report = Rede::findOrFail($id);
            return view('reporte.show',['data'=>$report]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El reportr ($id) no se ha encontrado");
            return redirect()->back();
        }
    }
}
