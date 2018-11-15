@extends('layouts.app')

@section('content')

    <h1> Añadi nueva planta</h1>


{!! Form::open(['route'=>'plantas.store']) !!} {{--asi va planta--}}
<div class="form-group">

    {!!Form::label('name','Nombre',['class'=>'control-label']) !!}
    {!!Form::text('name',null,['class'=>'form-control']) !!}

</div>


{!!Form::submit('crear planta',['class'=>'btn btn-primary']) !!}
{!! Form::close()!!}

@stop
