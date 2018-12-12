@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Zona Privada</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ver Usuario</li>
  </ol>
</nav>
<div class="jumbotron">

<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">

        
        
        <div class="card" >
             <div class="card-header">
                 <h1 class="card-title" >{{ $data->name }}</h1>
                 <p class="card-subtitle mb-2 text-muted">Usuario</p>

               
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">

             <table class="table table-striped table-bordered">

                <tr>
                    <td style="width: 200px;">Email</td>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td>{{ $data->Direccion }}</td>
                </tr>
                <tr>
                    <td>Rol</td>
                    <td>{{ $data->role }}</td>
                </tr>

                <tr>
                    <td>Created At</td>
                    <td>{{ $data->created_at }}</td>
                </tr>
                <tr>
                    <td>Updated At</td>
                    <td>{{ $data->updated_at }}</td>
                </tr>
                </table>

                <hr>
                <div class="row">
                    <div class="col">
                    <a href="{{ route('users.edit', $data->id) }}" class="btn btn-outline-primary">Editar usuario</a>
                     </div>
                    <div class="col">
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['users.destroy', $data->id]
                    ]) !!}

                    {!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-outline-danger']) !!}
                    {!! Form::close() !!}
                    </div>
                    <div class="col">
                    <a href="{{ route('users.index') }}" class="btn btn-outline-info">Volver a todos los usuarios</a>
                    </div>
                </div>
                
 

         


            </div>
        </div>

    </div>
</div>
</div>





@stop
