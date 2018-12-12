@extends('layouts.app')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-jhon" src="images/2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/iot3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/dedo.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/iot4.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/logo1.png" alt="Third slide">
    </div>
  </div>
</div>



<div class="jumbotron">
    <h2 class="text-center">CONTENIDO</h2>
    <div class="wrapper style2">
        <section class="container">

            <div class="row no-collapse-1">
                <section class="4u">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text text-justify">Escoge una planta para trabajar y conoce su comprotamiento...
                          </p>
                          <a  href="{{ url('/viewpr') }}" class="btn btn-outline-success">LEER MÁS</a>
                      </div>
                    </div> 

                </section>
                <section class="4u">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="images/5.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text text-justify">Aprende más e ingresa los parámetros que van a hacer de tu red neuronal la optima para tu planta y tu trabajo...
                          </p>
                          <a  href="{{ url('/redes/create') }}" class="btn btn-outline-success"> LEER MÁS</a>
                      </div>
                    </div>

                </section>
                <section class="4u">
                     <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="images/6.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text text-justify">Conoce más acerca de tus plantas y tu redes a través de las redes creadas y de las plantas que has escogido...
                          </p>
                          <a  href="{{ url('/reportes') }}" class="btn btn-outline-success"> LEER MÁS</a>
                      </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
</div>
@endsection





