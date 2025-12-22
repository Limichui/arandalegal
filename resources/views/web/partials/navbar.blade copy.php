<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="/" class="navbar-brand d-block d-lg-none w-50 h-50">
        <img class="img-fluid rounded p-1" src="{{ asset('assets/img/logo/logo-aranda-horizontal-movil.png') }}" alt="">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            @foreach($links as $link)
                {{-- 1. Buscamos en el array de dropdowns usando el título original (Español) --}}
                @php 
                    // Buscamos la traducción en español específicamente para la lógica de agrupación
                    $spanishTitle = $link->translations->where('locale', 'es')->first()->title ?? '';
                    print_r($spanishTitle);
                @endphp
                
                @if(isset($dropdowns[$spanishTitle])) //
                    <div class="nav-item dropdown">
                        {{-- 2. Mostramos el título traducido usando current_title --}}
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $link->current_title }}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            {{-- 3. Aquí también usamos current_title para los hijos --}}
                            @foreach($dropdowns[$spanishTitle] as $item)
                                <a href="{{ $item->url }}" class="dropdown-item">{{ $item->current_title }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    {{-- 4. Link simple traducido --}}
                    <a href="{{ $link->url }}" class="nav-item nav-link">{{ $link->current_title }}</a>
                @endif
            @endforeach
        </div>
        <a href="" class="btn btn-primary mr-3 d-none d-lg-block">
            {{ app()->getLocale() == 'en' ? 'Get a Quote' : 'Obtenga una cotización' }}
        </a>
    </div>
</nav>

