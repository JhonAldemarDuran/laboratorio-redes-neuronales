@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Zona Privada</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Reportes</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $data->name }}</li>
  </ol>
</nav>

<div class="jumbotron">

<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">

        
        
        <div class="card" >
             <div class="card-header">
                 <h1 class="card-title" >{{ $data->name }}</h1>
                 <p class="card-subtitle mb-2 text-muted">Reporte</p>

               
            </div>
            <div class="card-body">
            <table class="table ">

                <tr>
                    <td style="width: 200px;">Delta</td>
                    <td>{{ $data->delta }}</td>
                </tr>
                <tr>
                    <td>Tasa de Aprendizaje</td>
                    <td>{{ $data->rate_learning}}</td>
                </tr>
                <tr>
                    <td>Iteraciones</td>
                    <td>{{ $data->itera }}</td>
                </tr>

                <tr>
                    <td>Número de capas</td>
                    <td>{{ $data->numero_capas }}</td>
                </tr>
                
                  <tr>
                    <td>Número de Neuronas</td>
                    <td>{{ $data->numero_neu }}</td>
                </tr>
                
                  <tr>
                    <td>Tiempo de Establecimiento</td>
                    <td>{{ $data->tiempo_establecimiento }}</td>
                </tr>
                
                 <tr>
                    <td>Tiempo de Muestreo</td>
                    <td>{{ $data->tiempo_muestreo}}</td>
                </tr>
                     
                 <tr>
                    <td>Instancias de Adquisición</td>
                    <td>{{ $data->instancias_adq}}</td>
                     
                </tr>
                
                 <tr>
                    <td>Instancias de Control</td>
                    <td>{{ $data->instancias_c}}</td>
                </tr>
                
                 <tr>
                    <td>A11</td>
                    <td>{{ $data->a11}}</td>
                </tr>
                
                <tr>
                    <td>A12</td>
                    <td>{{ $data->a12}}</td>
                </tr>
                <tr>
                    <td>A21</td>
                    <td>{{ $data->a21}}</td>
                </tr>
                <tr>
                    <td>A22</td>
                    <td>{{ $data->a22}}</td>
                </tr>
                <tr>
                    <td>B11</td>
                    <td>{{ $data->b11}}</td>
                </tr>
                                <tr>
                    <td>B21</td>
                    <td>{{ $data->b21}}</td>
                </tr>
                                <tr>
                    <td>B22</td>
                    <td>{{ $data->b22}}</td>
                </tr>
                                <tr>
                    <td>C11</td>
                    <td>{{ $data->c11}}</td>
                </tr>
                                <tr>
                    <td>C12</td>
                    <td>{{ $data->c12}}</td>
                </tr>
                                <tr>
                    <td>D11</td>
                    <td>{{ $data->d11}}</td>
                </tr>
                
                </table>

                <hr>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('redes.edit', $data->id) }}" class="btn btn-outline-primary">Editar red</a>
                     </div>
                    <div class="col">
                        {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['redes.destroy', $data->id]
                            ]) !!}

                        {!! Form::submit('Borrar esta red?', ['class' => 'btn btn-outline-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="col">
                    <a href="{{ route('reportes.index') }}" class="btn btn-outline-info">Volver a todoas las redes</a>
                    </div>
                </div>
                

                

                
                @stop
 

         


            </div>
        </div>

    </div>
</div>
</div>





