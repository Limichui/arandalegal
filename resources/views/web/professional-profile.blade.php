@extends('web.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header1" style="margin-bottom: 90px;">
        <div class="container mb-0 pb-0" style="margin-bottom: 0px;">
            <div class="row align-items-center justify-content-between text-center text-md-center">
                <!-- Imagen: primero en móviles, segundo en desktop -->
                <div class="col-md-4 order-1 order-md-2 text-center pt-3">
                    <img src="{{ asset('assets/img/team/team-2.png') }}" 
                        alt="Carlos Daniel Gallinate Montecinos" 
                        class="header-img">
                </div>
                <!-- Texto: segundo en móviles, primero en desktop -->
                <div class="col-md-6 order-2 order-md-1">
                    <h3 class="display-4 text-white text-uppercase m-0">
                        Carlos Daniel Gallinate Montecinos
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Profile Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-4">
                <h1 class="mb-4">Datos profesionales</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p class="lead text-center">Prueba de contenido para la página de datos profesionales.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Section End -->
@endsection