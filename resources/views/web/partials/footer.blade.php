<div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row pt-5">
        @foreach($titles as $title)
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">{{ $title->title }}</h4>
                <!--'id', 'footer_title_id', 'title', 'url', 'order'-->
                @if($title->id == 1 || $title->id == 2)
                    @foreach($subTitles as $subTitle)
                        @if($subTitle->footer_title_id == $title->id)
                            <p class="justify-content-start mt-4">
                                {{ $subTitle->title }}
                                @if($subTitle->order == 1)
                                    <div class="d-flex justify-content-start mt-4">
                                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                                        (+591) 706 66636 – (+591) 690 99966
                                    </div>
                                @endif
                                @if($subTitle->order == 2)
                                    <div class="d-flex justify-content-start mt-4">
                                        <i class="fa fa-envelope text-primary mr-2 mt-1"></i>
                                        contacto@arandalegal.com
                                    </div>
                                @endif
                            </p>
                        @endif
                    @endforeach
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://wa.me/70666636" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                @endif
                @if($title->id == 3 || $title->id == 4)
                    <div class="d-flex flex-column justify-content-start">
                        @foreach($subTitles as $subTitle)
                            @if($subTitle->footer_title_id == $title->id)
                                <a class="text-white mb-2" href="{{ $subTitle->url }}"><i class="fa fa-angle-right mr-2"></i>{{ $subTitle->title }}</a>
                            @endif
                        @endforeach
                    </div>
                @endif
                @if($title->id == 5 || $title->id == 6)
                    @php
                        $text = null;
                        $btnText = null;
                    @endphp
                    @foreach($subTitles as $subTitle)
                        @if($subTitle->footer_title_id == $title->id)
                            @if($subTitle->order == 1)
                                <p>{{ $subTitle->title }}</p>
                            @elseif($subTitle->order == 2)
                                @php $text = $subTitle->title; @endphp
                            @elseif($subTitle->order == 3)
                                @php $btnText = $subTitle->title; @endphp
                            @endif
                        @endif
                    @endforeach
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="{{ $text }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">{{ $btnText }}</button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
        
    </div>
    <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="https://arandalegal.com/" target="_blank">Aranda & Asociados</a>. Todos los derechos reservados.</p>
        </div>
        <div class="col-md-6 text-center text-md-right">
            <p class="m-0 text-white">Diseñado por <a class="font-weight-bold" href="https://contactodigital.com" target="_black">Contacto Digital</a></p>
        </div>
    </div>
</div>

