@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Zona Privada</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear Red</li>
  </ol>
</nav>

<div class="jumbotron">   
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-10">

            <div class="card" >
                 <div class="card-header">
                     <h1 class="card-title">Añadir una nueva red</h1>
                    <a class="card-subtitle mb-2 text-muted" href="{{ route('redes.index') }}">
                        Regresar a todas las redes.
                    </a>

                    @if($errors->any())
                    <div class="alert alert-danger card-text">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>                
                    @endif
                </div>
                <div class="card-body">
                    

                   {!! Form::open(['route'=>'redes.store']) !!}
                    
                     <div class="form-row">
                        <div class="form-group col-md-3">
                        {!!Form::label('name','Nombre',['class'=>'control-label']) !!}
                        {!!Form::text('name',null,['class'=>'form-control']) !!}
                         </div>
                   

                    <div class="form-group col-md-3">

                        {!!Form::label('delta','Delta',['class'=>'control-label']) !!}
                        {!!Form::text('delta',null,['class'=>'form-control']) !!}

                    </div>
                         
                   

                    <div class="form-group col-md-3">

                        {!!Form::label('rate_learning','Tasa de aprendizaje',['class'=>'control-label']) !!}
                        {!!Form::text('rate_learning',null,['class'=>'form-control']) !!}

                    </div>
                         
                   

                    <div class="form-group col-md-3">

                        {!!Form::label('itera','Iteraciones',['class'=>'control-label']) !!}
                        {!!Form::text('itera',null,['class'=>'form-control']) !!}

                    </div>
                    </div>
                         
                     <div class="form-row">
                    <div class="form-group col-md-3">

                        {!!Form::label('numero_capas','N° de capas',['class'=>'control-label']) !!}
                        {!!Form::text('numero_capas',null,['class'=>'form-control']) !!}


                    </div>
                    
                    <div class="form-group col-md-3">

                        {!!Form::label('numero_neu','N°de Neuronas',['class'=>'control-label']) !!}
                        {!!Form::text('numero_neu',null,['class'=>'form-control']) !!}


                    </div>
                        <div class="form-group col-md-3">

                        {!!Form::label('tiempo_establecimiento','Tiempo de establecimiento',['class'=>'control-label']) !!}
                        {!!Form::text('tiempo_establecimiento',null,['class'=>'form-control']) !!}


                    </div>
                         
                    <div class="form-group col-md-3">

                        {!!Form::label('tiempo_muestreo','Tiempo de muestro',['class'=>'control-label']) !!}
                        {!!Form::text('tiempo_muestreo',null,['class'=>'form-control']) !!}


                    </div>

                    </div>    
                    
                    
                    <div class="form-row">
                    
                   
                        
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">

                        {!!Form::label('instancias_adq','Instancias de Adquisiscion',['class'=>'control-label']) !!}
                        {!!Form::text('instancias_adq',null,['class'=>'form-control']) !!}

                    </div>
                    
                    <div class="form-group clo-md-6">

                      {!!Form::label('instancias_c','Instancias de Control',['class'=>'control-label']) !!}
                      {!!Form::text('instancias_c',null,['class'=>'form-control']) !!}

                    </div>
                    </div>
                    <a class="form-group row" >
                        Parámetros Matrices del Filtro de Kalman.
                    </a>
                    <a  >
                        Matriz A.
                    </a>
                    <div class="form-row">
                        <div class="form-group clo-md-4">

                      {!!Form::label('a11','A11',['class'=>'control-label']) !!}
                      {!!Form::text('a11',null,['class'=>'form-control']) !!}

                    </div>
                        <div class="form-group clo-md-4">

                      {!!Form::label('a12','A12',['class'=>'control-label']) !!}
                      {!!Form::text('a12',null,['class'=>'form-control']) !!}

                    </div>
                    <div class="form-group clo-md-4">

                      {!!Form::label('a21','A21',['class'=>'control-label']) !!}
                      {!!Form::text('a21',null,['class'=>'form-control']) !!}

                    </div>
                    <div class="form-group clo-md-4">

                      {!!Form::label('a22','A22',['class'=>'control-label']) !!}
                      {!!Form::text('a22',null,['class'=>'form-control']) !!}

                    </div>
                    </div>
                    
                    
                    <a  >
                        Matriz B.
                    </a>
                    <div class="form-row">
                        <div class="form-group clo-md-4">

                      {!!Form::label('b11','B11',['class'=>'control-label']) !!}
                      {!!Form::text('b11',null,['class'=>'form-control']) !!}

                    </div>
                        <div class="form-group clo-md-4">

                      {!!Form::label('b21','B21',['class'=>'control-label']) !!}
                      {!!Form::text('b21',null,['class'=>'form-control']) !!}

                    </div>
                    <div class="form-group clo-md-4">

                      {!!Form::label('b22','B22',['class'=>'control-label']) !!}
                      {!!Form::text('b22',null,['class'=>'form-control']) !!}

                    </div>
                    
                    </div>
                    <a class="form-group clo-md-3" >
                        Matriz C.
                    </a>
                    <div class="form-row">
                        <div class="form-group clo-md-4">

                      {!!Form::label('c11','C11',['class'=>'control-label']) !!}
                      {!!Form::text('c11',null,['class'=>'form-control']) !!}

                    </div>
                        <div class="form-group clo-md-4">

                      {!!Form::label('c12','C12',['class'=>'control-label']) !!}
                      {!!Form::text('c12',null,['class'=>'form-control']) !!}

                    </div>
                    </div>
                    <a  >
                        Matriz D.
                    </a>
                     <div class="form-row">
                        <div class="form-group clo-md-4">

                      {!!Form::label('d11','D11',['class'=>'control-label']) !!}
                      {!!Form::text('d11',null,['class'=>'form-control']) !!}

                    </div>
                    </div>
                    
                {!! Form::submit('Crear red', ['class' => 'btn btn-outline-primary']) !!}
                {!! Form::close() !!}

                @stop


                </div>
            </div>

        </div>
    </div>
</div>
    


