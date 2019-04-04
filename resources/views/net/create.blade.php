@extends('layouts.lrnuq')

@section('title', 'Creacion Redes')

@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">

            <a  class="breadcrumb" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Lista de Plantas</a>

            <a  class="breadcrumb" href="{{route('user.plant.show', ['user' => auth()->user()->id,'plant'=>$plant])}}">Planta # {{$plant}}</a>

            <a  class="breadcrumb breadcrumb-active" >Creación de Redes</a>

            <a href="{{route('user.plant.show', ['user' => auth()->user()->id,'plant'=>$plant])}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Volver a la lista">
            <i class="material-icons">arrow_back</i>
          </a>

          </div>
        </div>
    </nav>
</div>    

<article class="row">
    <section class="col s12 "> 
        <div class="card z-depth-1 hoverable">
            <div class="center card-header">
                <h1 class="card-title">
                    Formulario de Red <br>
                    <small>( Reporte )</small>
                </h1>
                
            </div> 
            <div class="card-content">
                <form method = 'POST' 
                      action = "{{route('user.plant.net.store', ['user' => auth()->user()->id,'plant'=>$plant])}}"
                      class="row">
                    @csrf 
<fieldset>
                        <legend>Datos generales</legend>                    
                    <div class="input-field col s12">
                        <input id="name" name = "name" type="text" class="validate" value="{{ old('name') }}" >
                        <label for="name">Nombre</label>
                        @if ($errors->has('name'))
                            <span class="helper-text red-text">
                         {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field col s4">
                        <input id="delta" name = "delta" type="number" step="0.00001" class="validate" value="{{ old('delta') }}" >
                        <label for="delta">Delta</label>
                        @if ($errors->has('delta'))
                            <span class="helper-text red-text">
                         {{ $errors->first('delta') }}
                            </span>
                        @endif
                  </div>
                                                                                                             
                  <div class="input-field col s4">
                        <input id="rate_learning" name = "rate_learning" type="number" step="0.00001" class="validate" value="{{ old('rate_learning') }}" >
                        <label for="rate_learning">Tasa de aprendizaje</label>
                        @if ($errors->has('rate_learning'))
                            <span class="helper-text red-text">
                         {{ $errors->first('rate_learning') }}
                            </span>
                        @endif
                    </div>           
                    
                    <div class="input-field col s4">
                        <input id="itera" name = "itera" type="number" class="validate" value="{{ old('itera') }}" >
                        <label for="itera">Iteraciones</label>
                        @if ($errors->has('itera'))
                            <span class="helper-text red-text">
                         {{ $errors->first('itera') }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field col s4">
                        <input id="numero_capas" name = "numero_capas" type="number" class="validate" value="{{ old('numero_capas') }}" >
                        <label for="numero_capas">Numero de Capas</label>
                        @if ($errors->has('numero_capas'))
                            <span class="helper-text red-text">
                         {{ $errors->first('numero_capas') }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field col s4">
                        <input id="numero_neu" name = "numero_neu" type="number" class="validate" value="{{ old('numero_neu') }}" >
                        <label for="numero_neu">Numero de Neuronas</label>
                        @if ($errors->has('numero_neu'))
                            <span class="helper-text red-text">
                         {{ $errors->first('numero_neu') }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field col s4">
                        <input id="tiempo_establecimiento" name = "tiempo_establecimiento" type="number" step="0.00001" class="validate" value="{{ old('tiempo_establecimiento') }}" >
                        <label for="tiempo_establecimiento">Tiempo de Establecimiento</label>
                        @if ($errors->has('tiempo_establecimiento'))
                            <span class="helper-text red-text">
                         {{ $errors->first('tiempo_establecimiento') }}
                            </span>
                        @endif
                    </div>
                    <div class="input-field col s4">
                        <input id="tiempo_muestreo" name = "tiempo_muestreo" type="number" step="0.00001" class="validate" value="{{ old('tiempo_muestreo') }}" >
                        <label for="tiempo_muestreo">Tiempo de Muestreo</label>
                        @if ($errors->has('tiempo_muestreo'))
                            <span class="helper-text red-text">
                         {{ $errors->first('tiempo_muestreo') }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field col s4">
                        <input id="instancias_adq" name = "instancias_adq" type="number" class="validate" value="{{ old('instancias_adq') }}" >
                        <label for="instancias_adq">Instancias de Adquicisión</label>
                        @if ($errors->has('instancias_adq'))
                            <span class="helper-text red-text">
                         {{ $errors->first('instancias_adq') }}
                            </span>
                        @endif
                    </div>  
                                                                                                             
                    <div class="input-field col s4">
                        <input id="instancias_c" name = "instancias_c" type="number" class="validate" value="{{ old('instancias_c') }}" >
                        <label for="instancias_c">Instancias de Control</label>
                        @if ($errors->has('instancias_c'))
                            <span class="helper-text red-text">
                         {{ $errors->first('instancias_c') }}
                            </span>
                        @endif
                    </div>                                                                                            
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Parámetros Matrices del Filtro de Kalman.</legend>                
                    
                    <div class="col s6">
                        <p class="blue-text">
                            Matrix A
                        </p>
                        <div class="input-field col s3">
                            <input id="a11" name = "a11" type="number" class="validate" value="{{ old('a11') }}" >
                            <label for="a11">A11</label>
                            @if ($errors->has('a11'))
                                <span class="helper-text red-text">
                            {{ $errors->first('a11') }}
                                </span>
                            @endif
                        </div> 

                        <div class="input-field col s3">
                            <input id="a12" name = "a12" type="number" class="validate" value="{{ old('a12') }}" >
                            <label for="a12">A12</label>
                            @if ($errors->has('a12'))
                                <span class="helper-text red-text">
                            {{ $errors->first('a12') }}
                                </span>
                             @endif
                        </div>
                        
                        <div class="input-field col s3">
                            <input id="a21" name = "a21" type="number" class="validate" value="{{ old('a21') }}" >
                            <label for="a21">A21</label>
                            @if ($errors->has('a21'))
                                <span class="helper-text red-text">
                            {{ $errors->first('a21') }}
                                </span>
                             @endif
                        </div> 
                        <div class="input-field col s3">     
                            <input id="a22" name = "a22" type="number" class="validate" value="{{ old('a22') }}" >
                            <label for="a22">A22</label>
                            @if ($errors->has('a22'))
                                <span class="helper-text red-text">
                            {{ $errors->first('a22') }}
                                </span>
                             @endif
                        </div>
                    </div>
 
                    <div class="col s6">
                        <p class="blue-text">
                            Matrix B
                        </p>
                        <div class="input-field col s4">
                            <input id="b11" name = "b11" type="number" class="validate" value="{{ old('b11') }}" >
                            <label for="b11">B11</label>
                            @if ($errors->has('b11'))
                                <span class="helper-text red-text">
                            {{ $errors->first('b11') }}
                                </span>
                             @endif
                        </div> 

                        <div class="input-field col s4">
                            <input id="b21" name = "b21" type="number" class="validate" value="{{ old('b21') }}" >
                            <label for="b21">B21</label>
                            @if ($errors->has('b21'))
                                <span class="helper-text red-text">
                            {{ $errors->first('b21') }}
                                </span>
                             @endif
                        </div>
                        <div class="input-field col s4">
                            <input id="b22" name = "b22" type="number" class="validate" value="{{ old('b22') }}" >
                            <label for="b22">B22</label>
                            @if ($errors->has('b22'))
                                <span class="helper-text red-text">
                            {{ $errors->first('b22') }}
                                </span>
                             @endif
                        </div> 
                    </div>

                     <div class="col s6"> 
                        <p class="blue-text">
                            Matrix C
                        </p>                     
                        <div class="input-field col s4">
                            <input id="c11" name = "c11" type="number" class="validate" value="{{ old('c11') }}" >
                            <label for="c11">C11</label>
                            @if ($errors->has('c11'))
                                <span class="helper-text red-text">
                            {{ $errors->first('c11') }}
                                </span>
                             @endif
                        </div> 
                    
                        <div class="input-field col s4">
                            <input id="c12" name = "c12" type="number" class="validate" value="{{ old('c12') }}" >
                            <label for="c12">C12</label>
                            @if ($errors->has('c12'))
                                <span class="helper-text red-text">
                            {{ $errors->first('c12') }}
                                </span>
                             @endif
                        </div>
                    </div>
                    <div class="col s6"> 
                        <p class="blue-text ">
                            Matrix D
                        </p>
                        
                    
                        <div class="input-field col s4">
                            <input id="d11" name = "d11" type="number" class="validate" value="{{ old('d11') }}" >
                            <label for="d11">D11</label>
                            @if ($errors->has('d11'))
                                <span class="helper-text red-text">
                            {{ $errors->first('d11') }}
                                </span>
                             @endif
                        </div> 
                    </div>
                    
                    </fieldset>
                    <br>
                    <div class="center col s12">
                        <button type ='submit' class="waves-effect waves-light btn-large" >
                            Crear
                            <i class = 'material-icons right'>add</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>        
</article>        
@endsection

   
