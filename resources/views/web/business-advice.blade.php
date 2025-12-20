@extends('web.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Asesoramiento Contable</h3>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Bussines Advice Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="assets/img/contabilidad.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h1 class="mb-4">Asesoramiento Contable</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Enfoque en el core business</h5>
                                <p class="m-0">Permitimos que tu empresa concentre sus recursos y esfuerzos en su actividad principal, delegando las funciones contables y administrativas a profesionales especializados.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Reducción de riesgos y errores contables</h5>
                                <p class="m-0">Optimizamos los procesos contables y de nómina, minimizando errores operativos y garantizando el cumplimiento normativo mediante una gestión técnica y precisa.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Fortalecimiento del control interno</h5>
                                <p class="m-0">Mejoramos los controles internos y la toma de decisiones financieras al brindar asesoramiento especializado, información confiable y procesos contables eficientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bussines Advice End -->
@endsection