@extends('layouts.app')

@section('content')


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-jhon" src="images/2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/iot1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/chimba.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/iot2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-jhon" src="images/logo1.png" alt="Third slide">
    </div>
  </div>
</div>
<!-- Featured -->
<div class="jumbotron">
    <h2 class="text-center">INFORMACIÓN</h2>
    <div class="wrapper style2">
        <section class="container">

            <div class="row no-collapse-1">
                <section class="4u">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text text-justify">El internet de las cosas es una tecnología basada en el internet global que permite la interconexión de
                        objetos...
                          </p>
                          <a  href="{{ url('/viewdoc') }}" class="btn btn-outline-success">LEER MÁS</a>
                      </div>
                    </div> 

                </section>
                <section class="4u">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="images/5.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text text-justify">Una red neuronal articial consiste en la interconexión de elementos generalmente acondicionados
                    y con una estructura específica...
                          </p>
                          <a  href="{{ url('/viewdoc') }}" class="btn btn-outline-success"> LEER MÁS</a>
                      </div>
                    </div>

                </section>
                <section class="4u">
                     <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="images/6.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text text-justify">El trabajo que realiza una neurona es único y básico. Este consiste en recepcionar las entradas
                    de las neuronas vecinas...
                          </p>
                          <a  href="{{ url('/viewdoc') }}" class="btn btn-outline-success"> LEER MÁS</a>
                      </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
</div>
@endsection



