@extends('web.app')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">El mejor Estudio Jurídoco</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Nuestra lucha es por tu justicia.</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Obtenga una cita</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Resultados que te mereces</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Estamos preparados para oponernos por usted.</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Llámanos ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="assets/img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 400px; margin-left: -105px; border: 1px solid #B49C73;">15 años de experiencia</h2>
                    <h6 class="text-uppercase">Conoce más sobre nosotros</h6>
                    <h1 class="mb-4">Servicios Legales de Confianza y Alta Eficiencia</h1>
                    <p>Ofrecemos un servicio legal sólido y profesional, comprometido con brindar soluciones claras y oportunas. Nuestro equipo trabaja con dedicación para garantizar atención personalizada y resultados efectivos en cada caso.</p>
                    <a href="" class="btn btn-primary mt-2">Leer más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-uppercase">Nuestro Trabajo Jurídico</h6>
                    <h1 class="mb-4">Nuestras Áreas de Especialización</h1>
                    <p>Contamos con diversas áreas de especialización orientadas a ofrecer soluciones legales integrales. Nuestro equipo trabaja con profesionalismo y compromiso para atender cada caso con dedicación y precisión.</p>
                    <a href="" class="btn btn-primary mt-2">Ver más servicios</a>
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded especialidad-card" style="border: 1px solid #B49C73;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="img-fluid mt-0 mb-4 rounded-top" src="assets/img/especialidades/familia.jpg"alt="">
                                <h5 class="mb-4 px-4" style="height: 40px;">Derecho de familia</h5>
                            </div>
                            <div class="m-0">
                                <a href="" class="btn btn-primary mt-2">Leer más</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded especialidad-card" style="border: 1px solid #B49C73;">
                            <div class="d-flex flex-column align-items-center text-center rounded">
                                
                                <img class="img-fluid mt-0 mb-4 rounded-top" src="assets/img/especialidades/nino-nina-adolecente.jpg" alt="">
                                <h5 class="mb-4 px-4" style="height: 40px;">Derecho de la niña, niño y adolescente</h5>
                            </div>
                            
                            <div class="m-0">
                                <a href="" class="btn btn-primary mt-2">Leer más</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded especialidad-card" style="border: 1px solid #B49C73;">
                            <div class="d-flex flex-column align-items-center text-center rounded">
                                
                                <img class="img-fluid mt-0 mb-4 rounded-top" src="assets/img/especialidades/adopcion-nacional-internacional.jpg" alt="">
                                <h5 class="mb-4 px-4" style="height: 40px;">Adopción nacional e internacional</h5>
                            </div>
                            
                            <div class="m-0">
                                <a href="" class="btn btn-primary mt-2">Leer más</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded especialidad-card" style="border: 1px solid #B49C73;">
                            <div class="d-flex flex-column align-items-center text-center rounded">
                                
                                <img class="img-fluid mt-0 mb-4 rounded-top" src="assets/img/especialidades/fiscal-tributario.jpg" alt="">
                                <h5 class="mb-4 px-4" style="height: 40px;">Derecho fiscal, tributario y aduanero</h5>
                            </div>
                            
                            <div class="m-0">
                                <a href="" class="btn btn-primary mt-2">Leer más</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded especialidad-card" style="border: 1px solid #B49C73;">
                            <div class="d-flex flex-column align-items-center text-center rounded">
                                
                                <img class="img-fluid mt-0 mb-4 rounded-top" src="assets/img/especialidades/auditoria-legal-empresarial.jpg"  alt="">
                                <h5 class="mb-4 px-4" style="height: 40px;">Auditoría legal empresarial</h5>
                            </div>
                            <div class="m-0">
                                <a href="" class="btn btn-primary mt-2">Leer más</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded especialidad-card" style="border: 1px solid #B49C73;">
                            <div class="d-flex flex-column align-items-center text-center rounded">
                                <img class="img-fluid mt-0 mb-4 rounded-top" src="assets/img/especialidades/propiedad-intelectual.jpg"  alt="">
                                <h5 class="mb-4 px-4" style="height: 40px;">Propiedad intelectual</h5>
                            </div>
                            <div class="m-0">
                                <a href="" class="btn btn-primary mt-2">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

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

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h1 class="mb-4">Staff de Profesionales</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 250px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -120px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <div style="height: 56px;">
                                <h5 class="mb-2 px-4">Jhonny Aranda Carrasco</h5>
                            </div>
                            <p class="mb-3 px-4">Socio Principal</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-1.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fa-solid fa-info"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <div style="height: 56px;">
                                <h5 class="mb-2 px-4">Carlos Daniel Gallinate Montecinos</h5>
                            </div>
                            <p class="mb-3 px-4">Abogado</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fa-solid fa-info"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <div style="height: 56px;">
                                <h5 class="mb-2 px-4">Jorge Luis Mamani Apaza</h5>
                            </div>
                            <p class="mb-3 px-4">Abogado</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fa-solid fa-info"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <div style="height: 56px;">
                                <h5 class="mb-2 px-4">Sandra Martínez Alba</h5>
                            </div>
                            <p class="mb-3 px-4">Asistente Legal</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fa-solid fa-info"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Solicite su consulta gratuita. Estamos aquí para ayudarle.</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Llámanos ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->

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
    