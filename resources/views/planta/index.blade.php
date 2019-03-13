@extends('layouts.app')


@section('content')

<div class="jumbotron">
    <div class="row justify-content-betwen">
        @foreach($imagens as $image)
            
            <div class="col-4">
                <img class="img-fluid" src="images/plantas/{{$image->name}}" alt="plantas" style="margin-bottom:2em;">
            </div>

        @endforeach
        
    </div>
</div>
@endsection
        
