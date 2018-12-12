@extends('layouts.app')


@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Zona Privada</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ver Reportes</li>
  </ol>
</nav>

<h1>Reportes</h1>


	<table class="table table-bordered">
		<tr>
			<th>N°</th>
			<th>Nombres</th>
			<th>Tipo</th>
			<th>Tasa de aprendizaje</th>
			<th>Iteraciones</th>
			<th>Número de capas</th>
            <th>Ver red</th>
			<th>Editar red</th>
			<th>Eliminar red</th>

		</tr>

			@foreach ($list as $rede)
				<tr>
					<td>{{ $rede->id }}</td>
					<td>{{ $rede->name }}</td>
					<td>{{ $rede->tipo}}</td>
					<td>{{ $rede->rate_learning}}</td>
					<td>{{ $rede->itera}}</td>
                    <td>{{ $rede->numero_capas}}</td>

					<td><a href="{{ route('reportes.show', $rede->id) }}" class="btn btn-info" ><span class="fa fa-eye" aria-hidden="true"></span></a><br><br></td>

					<td><a href="{{ route('redes.edit', $rede->id) }}" class="btn btn-warning" ><span class="fa fa-file-text" aria-hidden="true"> </span></a></td>

                    <td>{!! Form::open(['method' => 'DELETE','route' => ['redes.destroy', $rede->id]  ]) !!}<a class="btn btn-danger"  aria-label="Delete">
                            <i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

				</tr>
			@endforeach

	</table>

@endsection


{{--@section('content')


    <h1>Reportes</h1>
    <p class="lead">Lista de reportes.</p>
    <hr>
    @foreach($list as $rede)
        <p>{{ $rede->name }}</p>
        <p>{{ $rede->tipo }}</p>
        <p>{{ $rede->rate_learning }}</p>
        <p>{{ $rede->ietra}}</p>
        <p>{{ $rede->numero_capas}}</p>
         <p>
        <a href="{{ route('reportes.show', $rede->id) }}" class="btn btn-primary">Ver Red</a>
        <a href="{{ route('redes.edit', $rede->id) }}" class="btn btn-primary">Editar Red</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['redes.destroy', $rede->id]
        ]) !!}
        {!! Form::submit('Borrar esta red?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop--}}
