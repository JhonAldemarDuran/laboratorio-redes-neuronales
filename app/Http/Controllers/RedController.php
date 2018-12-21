<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Rede;

class RedController extends Controller
{
    public function viewpr()
    {
        return view('red.principal');
    }
     public function create(Request $request)
    {
        return view('red.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'tipo' => 'required',
            'rate_learning'=>'required',
            'itera'=>'required',
            'numero_capas'=>'required'

        ]);
        $input = $request->all();
        Rede::create($input);
        Session::flash('flash_message', 'planta exitosamente seleccionada!');
        return redirect('/reportes');
    }

     public function edit(Request $request, $id)
    {
        try{
            $rede=Rede::findOrFail($id);
            return view('red.edit',['data'=>$rede]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"La Red ($id) no pudo ser editado");
            return redirect()->back();
        }
    }

    public function raspberry()
    {
        $redes = Rede::all('id','rate_learning','itera','numero_capas');
        return  response()->json(['redes'=>$redes]);
    }

    public function raspberryAgregar(Request $request)
    {
        $respuesta = $request->all();
        Log::error($respuesta);

        
        return  response()->json(['algo'=> $respuesta]);
    }
}
