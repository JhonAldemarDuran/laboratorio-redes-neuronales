<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Net;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Plant;


/**
 * Class NetController.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:08:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class NetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $nets = Net::all();
        return view('net.index',compact('nets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create($user, $plant)
    {        
                
        return view('net.create',compact('plant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request,$user,$plant)
    {
        
        $this->_validate($request);
        $net = new Net();
        $net->fill($request->all());
        $net->user_id = $user;
        $net->plant_id = $plant;
        $net->save();
        return redirect()->route('user.plant.show',['user'=>$user,'plant'=>$plant]);
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($user, $plant, Net $net)
    {
        $reports = $net->reports;
        $images = $net->images;
       return view('net.show',compact('net' ,'plant','user','reports','images' ) );
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($user, $plant, Net $net)
    {
        return view('net.edit',compact('net' ,'plant','user' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request,$user, $plant,Net $net)
    {   
        $this->_validate($request);
        $net->fill($request->all());
        $net->save();
        return redirect()->route('user.plant.show',['user'=>$user,'plant'=>$plant]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($user, $plant,Net $net)
    {
     	$net->delete();
        return route('user.plant.show',['user'=>$user,'plant'=>$plant]);
    }
    
    public function _validate($request){
        $messages = [
            'name.required' => 'El Nombre es Requerido',     
            'name.max' => 'El Nombre debe contener máximo 66 caracteres',
            'delta.required' => 'Delta es Requerido',     
            'rate_learning.required' => 'La tasa de aprendizaje es reuqerida',
            'itera.required' => 'El Número de ietraciones es requerido',
            'numero_capas.required' => 'El Número de capas es requerido',
            'numero_capas.integer' => 'Debe ser entero',
            'numero_neu.required' => 'El Número de neuronas es requerido',
            'numero_capas.integer' => 'Debe Ser Entero',
            'tiempo_establecimiento.required' => 'El Tiempo de Establecimiento es requerido',
            'tiempo_muestreo.required' => 'El Tiempo de Muestreo es requerido',
            'instancias_adq.required' => 'instancias de Adquicisión es requerido',
            'instancias_c.required' => 'Instancias de Control es requerido',
            'a11.required' => 'El Número es requerido',
            'a11.integer' => 'Debe ser entero',
            'a12.required' => 'El Número es requerido',
            'a12.integer' => 'Debe ser entero',
            'a21.required' => 'El Número es requerido',
            'a21.integer' => 'Debe ser entero',
            'a22.required' => 'El Número es requerido',
            'a22.integer' => 'Debe ser entero',
            'b11.required' => 'El Número es requerido',
            'b11.integer' => 'Debe ser entero',
            'b21.required' => 'El Número es requerido',
            'b21.integer' => 'Debe ser entero',
            'b22.required' => 'El Número es requerido',
            'b22.integer' => 'Debe ser entero',
            'c11.required' => 'El Número es requerido',
            'c11.integer' => 'Debe ser entero',
            'c12.required' => 'El Número es requerido',
            'c12.integer' => 'Debe ser entero',
            'd11.required' => 'El Número es requerido',
            'd11.integer' => 'Debe ser entero',
        ];
       $request->validate( [
            'name' => 'required|string|max:66',
            'delta' => 'required|numeric',
            'rate_learning'=>'required|numeric',
            'itera'=>'required|integer',
            'numero_capas'=>'required|integer',
            'numero_neu'=>'required|integer',
            'tiempo_establecimiento'=>'required|numeric',
            'tiempo_muestreo'=>'required|numeric',
            'instancias_adq'=>'required|integer',
            'instancias_c'=>'required|integer',
            'a11'=>'required|integer',
            'a12'=>'required|integer',
            'a21'=>'required|integer',
            'a22'=>'required|integer',
            'b11'=>'required|integer',
            'b21'=>'required|integer',
            'b22'=>'required|integer',
            'c11'=>'required|integer',
            'c12'=>'required|integer',
            'd11'=>'required|integer',
       ],$messages);

        }
    }
  

