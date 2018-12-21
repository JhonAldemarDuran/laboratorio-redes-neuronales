@extends('layouts.app')


@section('content')
<nav aria-label="breadcrumb">

  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Zona Privada</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de Usuario</li>
    
  </ol>
 
</nav>
<div class="pull-right">
    
<a href="{!! url('users/create') !!}" title="Agregar Usuario" class="btn btn-outline-primary btn-lg derecha"><i class="fa fa-user-plus"></i></a>
    
</div>


<div class="jumbotron">
    <div class="row justify-content-center">
        <div class="col-10">
        <h1 class="text-center">Listado de usuarios</h1>
    

<div class="card">
    <table class="table table-bordered">
		<tr>
			<th>N°</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Rol</th>
            <th>Createdted At</th>
            <th>Updated At</th>
            <th>Ver usuario</th>
			<th>Editar usuario</th>
			<th>Eliminar usuario</th>



		</tr>

			@foreach ($list as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email}}</td>
					<td>{{ $user->role}}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>


					<td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info" ><span class="fa fa-eye" aria-hidden="true"></span></a><br><br></td>

					<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning" ><span class="fa fa-file-text" aria-hidden="true"> </span></a></td>

                    <td>{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id]  ]) !!}<a class="btn btn-danger"  aria-label="Delete">
                            <i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

				</tr>
			@endforeach

	</table>
    </div>
@endsection
        </div>

    </div>

</div>




{{--<hr>
    @foreach($list as $user)
        <h3>{{ $user->name }}</h3>
        <p>{{ $user->email }}</p>
        <p>{{ $user->Direccion }}</p>
        <p>{{ $user->role }}</p>

        <p>
        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Ver Usuario</a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar Usuario</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['users.destroy', $user->id]
        ]) !!}
        {!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop
--}}
