@extends('layouts.app')
@section('content')


<h1>Editar Red</h1>
<p class="lead">Editar esta red.
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{{--{!! Form::model($data, [
    'method' => 'PUT',
    'route' => ['redes.update', $data->id]
]) !!}--}}

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

    {!! Form::submit('Actualizar Red', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
