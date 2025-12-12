@extends('web.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">¿Por qué elegirnos?</h3>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mt-4 mt-lg-0 order-2 order-lg-1">
                    <h6 class="text-uppercase">Conoce más sobre nosotros</h6>
                    <h1 class="mb-4">Servicios Legales de Confianza y Alta Eficiencia</h1>
                    <p>Aranda y Asociados, Estudio Jurídico y Servicios Empresariales, es un despacho jurídico y contable integrado por profesionales especializados que, mediante el rigor académico y la práctica jurídica, encuentran en el Derecho un instrumento para servir a la sociedad. Nuestra labor se fundamenta en la vocación, la lealtad y la confianza hacia nuestros clientes.</p>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <img class="img-fluid rounded" src="assets/img/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Benefits Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="assets/img/por-que-elegirnos-1.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h1 class="mb-4">Beneficios de trabajar con nuestra firma</h1>
                    <p>El principal beneficio de trabajar con <strong>Aranda y Asociados</strong> es que nuestra asesoría ofrece al cliente una visión realista y objetiva sobre las alternativas para alcanzar la mejor solución posible al asunto encomendado.</p>
                    <p>Brindamos a nuestros clientes un alto nivel de confianza y seguridad, respaldado por un equipo en permanente formación y actualización. A través de un trato personalizado e informes periódicos, mantenemos al cliente informado sobre el estado de sus trámites y procesos legales.</p>
                    <p>Desde el momento en que el cliente contrata nuestros servicios, sus problemas y asuntos se convierten en nuestra prioridad inmediata. Dirigimos nuestros conocimientos y esfuerzos a proporcionar la mejor asesoría y defensa legal posible.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits End -->

    <!-- Misión Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mt-4 mt-lg-0 order-2 order-lg-1">
                    <h6 class="text-uppercase"></h6>
                    <h1 class="mb-4">Nuestra Misión</h1>
                    <p>La misión que tiene <strong>Aranda y Asociados</strong>, estudio Jurídico y servicios empresariales, es de ofrecer un servicio de alta calidad en el asesoramiento y defensa de los intereses de nuestros clientes, dándoles seguridad y la satisfacción de sentirse protegidos y representados por profesionales idóneos, aptos y comprometidos con sus causas.</p>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <img class="img-fluid rounded" src="assets/img/mision1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Misión End -->

    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="assets/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Nuestras características</h6>
                        <h1 class="mb-4">¿Por qué elegirnos?</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Mejores Prácticas Jurídicas</h5>
                                <p class="m-0">Aplicamos estándares jurídicos actualizados y métodos de trabajo profesionales que garantizan un manejo preciso y responsable de cada caso. Nuestro compromiso es brindar un servicio basado en rigor, ética y calidad.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Resultados que mereces</h5>
                                <p class="m-0">Trabajamos con transparencia, rapidez y dedicación. Mantenemos una comunicación constante con nuestros clientes para asegurar decisiones informadas y un servicio confiable.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Resultados que mereces</h5>
                                <p class="m-0">Nos enfocamos en obtener soluciones justas y efectivas, defendiendo tus derechos con compromiso y buscando siempre el mejor resultado posible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <!--h6 class="text-uppercase">Testimonial</h6-->
                <h1 class="mb-5">Nuestros Clientes</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/ADESU-min.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/AEROSUR-min.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/ALTO-LTDA-min.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/american-business.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/american-business-1.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/ASTON2.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/CNG-min.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="assets/img/clientes/COFADENA-min.jpg" style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection