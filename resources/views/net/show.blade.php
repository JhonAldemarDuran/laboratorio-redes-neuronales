@extends('layouts.lrnuq')

@section('title', 'Reporte de la red')
@section('meta')
<meta type = 'hidden' name="_token" content="{{csrf_token()}}" />
@endsection()
@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">

            <a  class="breadcrumb" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Lista de Plantas</a>

            <a  class="breadcrumb" href="{{route('user.plant.show', ['user' => auth()->user()->id,'plant'=>$plant])}}">Planta # {{$plant}}</a>

            <a  class="breadcrumb breadcrumb-active">Reporte # {{$net->id}}</a>

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
   <section class="card z-depth-1 ">
       
        <div class="card-header">    
            <h4 class="center teal-text ">
                Reporte de Red
            </h4>
        </div> 
       <div class="card-content row">      
            <ul class="collection  col s12 m5 offset-m1">
                <li class="collection-item active">
                    <div class="center">
                        Datos generales
                    </div>
                </li>
                <li class="collection-item ">
                    <div>
                        Nombre
                        <a class="secondary-content">
                            {{$net->name}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Delta
                        <a class="secondary-content">
                            {{$net->delta}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Tasa de aprendizaje
                        <a class="secondary-content">
                            {{$net->rate_learning}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Iteraciones
                        <a class="secondary-content">
                            {{$net->itera}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        N° de capas
                        <a class="secondary-content">
                            {{$net->numero_capas}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        N° de Neuronas
                        <a class="secondary-content">
                           {{$net->numero_neu}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Tiempo de establecimiento
                        <a class="secondary-content">
                            {{$net->tiempo_establecimiento}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Tiempo de muestro
                        <a class="secondary-content">
                            {{$net->tiempo_muestreo}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Instancias de Adquicisión
                        <a class="secondary-content">
                            {{$net->instancias_adq}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Instancias de Control
                        <a class="secondary-content">
                            {{$net->instancias_c}}
                        </a>
                    </div>
                </li>
            </ul>
           
           <ul class="collection  col s12 m4 offset-m1">
                <li class="collection-item active">
                    <div class="center">
                        Matrixesff                        
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        A11
                        <a class="secondary-content">
                           {{$net->a11}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        A12
                        <a class="secondary-content">
                             {{$net->a12}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        A21
                        <a class="secondary-content">
                            {{$net->a21}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        A22
                        <a class="secondary-content">
                            {{$net->a22}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        B11
                        <a class="secondary-content">
                           {{$net->b11}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        B21
                        <a class="secondary-content">
                            {{$net->b21}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        B22
                        <a class="secondary-content">
                            {{$net->b22}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        C11
                        <a class="secondary-content">
                            {{$net->c11}}
                        </a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        C12
                        <a class="secondary-content">
                            {{$net->c12}}
                        </a>
                    </div>
                </li>
               <li class="collection-item">
                    <div>
                        D11
                        <a class="secondary-content">
                            {{$net->d11}}
                        </a>
                    </div>
                </li>
            </ul> 

             @if(count($images))
                <div class="carousel carousel-slider center"> 
                    @foreach($images as $img)
                    <a class="carousel-item" href="#{{$img->id}}">
                        <img  style="width: 83%; cursor: zoom-in;" data-enlargable  src="{{asset('images/reports').'/'.$img->url_name}}">
                    </a>               
                    @endforeach()
                </div>            
            @endif 
                
 
        </div>
    </section>     
</article>
<style>
</style>
@endsection
@section('javascript')
    @parent      
    <script  >
        $(document).ready(function(){
            var options = { fullWidth: true,
                            indicators: true
                            }            
            $('.carousel').carousel(options);
  
        }); 
    </script> 
@endsection 
