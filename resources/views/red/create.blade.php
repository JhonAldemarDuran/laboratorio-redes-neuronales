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
        <div class="col-12 col-md-8 col-lg-6">

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
                    <div class="form-group">

                        {!!Form::label('name','Nombre',['class'=>'control-label']) !!}
                        {!!Form::text('name',null,['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!!Form::label('tipo','Tipo',['class'=>'control-label']) !!}
                        {!!Form::text('tipo',null,['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!!Form::label('rate_learning','Tasa de aprendizaje',['class'=>'control-label']) !!}
                        {!!Form::text('rate_learning',null,['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!!Form::label('itera','Iteraciones',['class'=>'control-label']) !!}
                        {!!Form::text('itera',null,['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!!Form::label('numero_capas','Número de capas',['class'=>'control-label']) !!}
                        {!!Form::text('numero_capas',null,['class'=>'form-control']) !!}


                    </div>
                {!! Form::submit('Crear red', ['class' => 'btn btn-outline-primary']) !!}
                {!! Form::close() !!}

                @stop


                </div>
            </div>

        </div>
    </div>
</div>
    


