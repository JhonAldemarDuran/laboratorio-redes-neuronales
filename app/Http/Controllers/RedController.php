<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Rede;
use App\Imagen;
use Log;
use App\User;

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
            'delta' => 'required',
            'rate_learning'=>'required',
            'itera'=>'required',
            'numero_capas'=>'required',
            'numero_neu'=>'required',
            'tiempo_establecimiento'=>'required',
            'tiempo_muestreo'=>'required',
            'instancias_adq'=>'required',
            'instancias_c'=>'required',
            'a11'=>'required',
            'a12'=>'required',
            'a21'=>'required',
            'a22'=>'required',
            'b11'=>'required',
            'b21'=>'required',
            'b22'=>'required',
            'c11'=>'required',
            'c12'=>'required',
            'd11'=>'required'
            
            

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
        $redes = Rede::all('id','delta','rate_learning','itera','numero_capas','numero_neu','tiempo_establecimiento','tiempo_muestreo','instancias_adq','instancias_c','a11','a12','a21','a22','b11','b21','b22','c11','c12','d11');
        return  response()->json(['redes'=>$redes]);
    }


    public function raspberryAgregar(Request $request,User $user )
   
    {
        
        //if($request->imagen){
          //  $image = base64_decode($request->imagen);
        //}

        //error_log( $image );

        $image = $request->imagen;
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/plantas');
        $image->move($destinationPath, $input['imagename']);

        $img = new Imagen;
        $img->timestamps = false;
        $img->name = $input['imagename'];
        $img->user_id = 2;
        $img->save();
        
        
               
        return  response($img);
    }
    
    
}


