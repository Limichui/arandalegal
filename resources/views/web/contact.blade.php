@extends('web.app')

@section('content')
<!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Contacto</h3>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Contáctanos</h6>
                <h1 class="mb-4">Comunícate con nosotros ante cualquier duda</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0" style="min-height: 400px;">
                    <p class="justify-content-start">
                        <div>
                            <label style="font-weight: bold;">Oficina La Paz: </label> Edificio Alborada, calle Juan de la Riva N° 1406, esquina calle Loayza Piso 4, oficina 407.
                        </div>
                        <div>
                            <label class="mt-4" style="font-weight: bold;">Oficina Santa Cruz: </label> Calle Gabriel Jose Moreno Nro. 3595, Santos Dumont, Barrio La Morita.
                        </div>
                        <div class="d-flex justify-content-start mt-4">
                            <i class="fa fa-envelope text-primary mr-2 mt-1"></i>
                            contacto@arandalegal.com
                        </div>
                        <div class="d-flex justify-content-start mt-4">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            (+591) 706 66636 – (+591) 690 99966
                        </div>
                    </p>
                <div class="col-lg-7 text-left">
                        
                    </div>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="https://wa.me/70666636" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                </div>

                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Tu nombre" required="required" data-validation-required-message="Por favor, ingrese su nombre" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Tu correo electrónico" required="required" data-validation-required-message="Por favor, ingrese su correo electrónico" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Asunto" required="required" data-validation-required-message="Por favor, ingrese un asunto" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Por favor, ingrese su mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-lg-0">
                    <div class="text-center pb-2 mt-2">
                        <h3 class="mb-3">Oficina en La Paz</h3>
                    </div>
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3776.7483000299576!2d-68.13305816286864!3d-16.498845028491033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2071b8160afd%3A0x2af55d882181942a!2sEdificio%20Alborada!5e0!3m2!1ses-419!2sbo!4v1765477085644!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



                    </div>
                </div>
                
                <div class="col-lg-6 mb-lg-0">
                    <div class="text-center pb-2 mt-2">
                        <h3 class="mb-3">Oficina en Santa Cruz</h3>
                    </div>
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1899.195121629979!2d-63.186438!3d-17.820332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e9ccbcfdf583%3A0xad27c17113cdfbdb!2sDr%20Gabriel%20Jose%20Moreno%203595%2C%20Santa%20Cruz%20de%20la%20Sierra!5e0!3m2!1ses!2sbo!4v1765477503645!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection