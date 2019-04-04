@extends('layouts.lrnuq')

@section('title', 'Creación de Plantas')

@section('content')
    <div class="row-breadcrumb"> 
        <nav class="row">
            <div class="nav-wrapper grey darken-4">
              <div class="col s12">
                <a  class="breadcrumb" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Lista de Plantas</a>
                <a  class="breadcrumb breadcrumb-active">Creación de Plantas</a>
                <a href="{{route('user.plant.index', ['user' => auth()->user()->id])}}" 
                    class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                    title="Volver a la lista">
                <i class="material-icons">arrow_back</i>
              </a>
              </div>
            </div>
        </nav>
    </div>
    <article class="row">
        <section class="col s12 m8 l6 offset-m2 offset-l3"> 
            <div class="card z-depth-1 hoverable">
                <div class="center card-header">
                    <h1 class="card-title">Formulario de Creación</h1>
                </div> 

                <div class="card-content">
                    <form method = 'POST' action = "{{route('user.plant.store', ['user' => auth()->user()->id])}}">
                        @csrf               
                        <div class="input-field col s12 ">
                            <input id="name" name = "name" type="text" class="validate" 
                                    maxlength="192" required value="{{ old('name') }}">
                            <label for="name">Nombre</label>
                            @if($errors->has('name'))
                                <span class="helper-text">{!!$errors->first('name')!!}</span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                            <textarea id="description" name="description" class="materialize-textarea" value="{{ old('description') }}"></textarea>
                            <label for="description">Descripción</label>
                            @if ($errors->has('description'))
                                <span class="helper-text red-text">
                                    {{ $errors->first('description') }}
                                 </span>
                             @endif
                        </div>
 
                        <div class="center">
                            <button type ='submit' class="waves-effect waves-light btn-large" >
                                Crear
                                <i class = 'material-icons right'>add</i>
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>        
    </article>
        
@endsection

@section('javascript')
    @parent
    <script>   
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {});
      }); 
</script>
@endsection
