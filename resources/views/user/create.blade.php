@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Zona Privada</a></li>
    <li class="breadcrumb-item"><a href="{{ route('users.index')}}">Lista deUsuario</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear Usuario</li>
  </ol>
</nav>

<div class="jumbotron">   
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

            <div class="card" >
                 <div class="card-header">
                     <h1 class="card-title">Añadir nuevo usuario</h1>
                    <a class="card-subtitle mb-2 text-muted" href="{{ route('users.index') }}">
                        Regresar a todos los usuarios.
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
                    

                    {!! Form::open(['route' => 'users.store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Direccion', 'Dirección', ['class' => 'control-label']) !!}
                        {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
                    </div>
                {!! Form::submit('Crear usuario', ['class' => 'btn btn-outline-primary']) !!}
                {!! Form::close() !!}

                @stop


                </div>
            </div>

        </div>
    </div>
</div>