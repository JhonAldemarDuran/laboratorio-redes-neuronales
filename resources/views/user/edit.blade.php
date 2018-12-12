@extends('layouts.app')
@section('content')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('users.index')}}">Lista deUsuario</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar a {{ $data->name }}</li>
  </ol>
</nav>

<div class="jumbotron">

    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

            
            
            <div class="card" >
                 <div class="card-header">
                     <h1 class="card-title">Editar usuario</h1>
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
                    

                {!! Form::model($data, [
                'method' => 'PUT',
                'route' => ['users.update', $data->id]
                ]) !!}

                <div class="form-group">
                {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                {!! Form::label('role', 'Rol', ['class' => 'control-label']) !!}
                {!! Form::select('role', ['1' => 'Administrador', '2' => 'Persona','3' => 'IoTSystem']); !!}
                </div>
                <div class="form-group">
                {!! Form::label('Direccion', 'Dirección', ['class' => 'control-label']) !!}
                {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-outline-primary']) !!}
                {!! Form::close() !!}

                @stop


                </div>
            </div>

        </div>
    </div>
</div>

