@extends('web.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-page-profile-header" style="margin-bottom: 0px;">
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
    <div class="container-fluid">

        <div class="container py-5">
            <div class="row">
                <!-- Experiencia -->
                <div class="col-12 mb-0">
                    <div class="text-center pb-2">
                        <h1 class="mb-4">Experiencia</h1>
                    </div>
                    <div class="justify-content-center">
                        <div class="col-md-12">
                            <p class="lead text-justify">Carlos Daniel Gallinate Montecinos, es actualmente abogado en la sociedad de responsabilidad limitada denominada como “Aranda y Asociados Estudio Jurídico SRL”. Inicio sus practicas como pasante o procurador a partir de la gestión 2016 en estudios jurídicos. Por otro lado, este ejercicio como abogado registrado en el RPA (Registro Publico de la Abogacía) a partir del año 2018 en una serie de estudios jurídicos. Así mismo es especialista en materia de Derecho civil, familiar, laboral y derechos reales, también asesoro técnica y jurídicamente a empresas nacionales como extranjeras en las materias referidas lineas arriba ademas de haber participado en la elaboración de su constitución así como también de sus modificaciones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-2">
            <div class="row">
                <!-- Formación académica -->
                <div class="col-md-6 mb-0 mb-md-0">
                    <div class="text-center pb-2">
                        <h1 class="mb-4">Formación Académica</h1>
                    </div>
                    <ul class="lead text-justify">
                        <li>Titulado de la Carrera de Derecho (21 de marzo de 2018) de la Universidad de Aquino Bolivia “UDABOL” de la ciudad de La Paz.</li>
                        <li>Diplomado en Derecho Procesal Penal - Universidad de Aquino - Bolivia “UDABOL”.</li>
                        <li>Diplomado en el Código Procesal Civil y en el Código de las Familias y del Proceso Familiar - Universidad Mayor de San Andrés “UMSA”.</li>
                        <li>Diplomado en Derecho Laboral, Procesal Laboral y Seguridad Social - Universidad del Valle Bolivia “UNIVALLE”.</li>
                    </ul>
                </div>
                <div class="row col-md-6">
                    <!-- Áreas prácticas -->
                    <div class="col-12">
                        <div class="text-center pb-2">
                            <h1 class="mb-4">Área de Práctica</h1>
                        </div>
                        <ul class="lead text-justify">
                            <li>Derecho Laboral</li>
                            <li>Derecho Civil</li>
                            <li>Derechos Reales</li>
                            <li>Derecho Tributario</li>
                            <li>Derecho Familiar</li>
                        </ul>
                    </div>
                    <!-- Idiomas -->
                    <div class="col-12">
                        <div class="text-center pb-2">
                            <h1 class="mb-4">Idiomas</h1>
                        </div>
                        <ul class="lead text-justify">
                            <li>Español</li>
                            <li>Ingles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Section End -->
@endsection