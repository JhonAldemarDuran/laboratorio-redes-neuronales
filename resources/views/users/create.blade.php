@extends('layouts.lrnuq')

@section('title', 'Creación de Plantas')

@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">
            <a  class="breadcrumb" href="{{route('users.index')}}">Lista de Usuarios</a>
            <a  class="breadcrumb breadcrumb-active">Creación de Usuario</a>
            <a href="{{route('users.index')}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Volver a la lista">
            <i class="material-icons">arrow_back</i>
          </a>
          </div>
        </div>
    </nav>
</div>
<article class="row">
    <section class="col s12 m6  offset-m3 "> 
        <div class="card z-depth-1 hoverable">
            <div class="center card-header">
                <h1 class="card-title">Crear Usuario</h1>
            </div> 

            <div class="card-content">		
			<form action = "{{route('users.store')}}" method = "post">
				@csrf
                <div class="input-field col s12">
                    <input type="text" name="name" id="name"  class="validate" required autofocus value="{{ old('name') }}">
                    <label for="name">Nombre</label>
                    
                    @if ($errors->has('name'))
                    <span class="helper-text red-text">
                         {{ $errors->first('name') }}
                    </span>
                    @endif
                   
                    </div>

                <div class="input-field col s12">
                    <input type="email" name="email" id="email"  class="validate" value="{{ old('email') }}" required>
                    <label for="email">Correo</label>
                    @if ($errors->has('email'))
                    <span class="helper-text red-text">
                         {{ $errors->first('email') }}
                    </span>
                    @endif

                </div>

                <div class="input-field col s12">
                    <input type="password" name="password"  class="validate" id="password"  required>
                    <label for="password">Contraseña</label>
                    @if ($errors->has('password'))
                    <span class="helper-text red-text">
                         {{ $errors->first('password') }}
                    </span>
                    @endif
                </div>

                 <div class="input-field col s12">
				    <select name="role">
				      <option value="" disabled selected>Elige un Rol</option>
				      @foreach($roles as $role)
				      <option value="{{$role->name}}">{{$role->name}}</option>
				      @endforeach()
				    </select>
				    <label>Rol</label>
				  </div>

                <div class="center">
                    <button type ='submit' class="waves-effect waves-light btn-large" >
                        Agregar
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
	$(document).ready(function(){
    $('select').formSelect();
  });
</script>
 
@endsection 

