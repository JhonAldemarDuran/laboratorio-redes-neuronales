@extends('layouts.app')

@section('content')


<h1>{{ $data->name }}</h1>
<p class="lead">Reporte</p>

<table class="table table-striped table-hover">

<tr>
    <td style="width: 200px;">tipo</td>
    <td>{{ $data->tipo }}</td>
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
    <td>Created At</td>
    <td>{{ $data->created_at }}</td>
</tr>
<tr>
    <td>Updated At</td>
    <td>{{ $data->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('redes.edit', $data->id) }}" class="btn btn-primary">Editar red</a>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['redes.destroy', $data->id]
]) !!}

{!! Form::submit('Borrar esta red?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<a href="{{ route('reportes.index') }}" class="btn btn-info">Volver a todoas las redes</a>
@stop
