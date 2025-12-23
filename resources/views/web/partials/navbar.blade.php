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
                @if($link->url === '#')
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $link->title }}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            @foreach($dropdowns as $item)
                                @if($item->parent == $link->id)
                                    <a href="{{ $item->url }}" class="dropdown-item">{{ $item->title }}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $link->url }}" class="nav-item nav-link">{{ $link->title }}</a>
                @endif
            @endforeach
        </div>

        <!-- Selector de idioma -->
        <div class="d-flex align-items-center ml-auto" style="gap: 10px;">
            <small class="text-uppercase font-weight-bold {{ app()->getLocale() == 'es' ? 'text-dark' : 'text-muted' }}">ES</small>
            <a href="{{ route('lang.switch', app()->getLocale() == 'es' ? 'en' : 'es') }}" 
            class="position-relative d-inline-block" 
            style="width: 40px; height: 20px; background: #e9ecef; border-radius: 20px; border: 1px solid #dee2e6;">
                <span class="position-absolute shadow-sm" 
                    style="width: 16px; height: 16px; background: white; border-radius: 50%; top: 1px; {{ app()->getLocale() == 'es' ? 'left: 2px;' : 'right: 2px;' }} transition: 0.3s;">
                </span>
            </a>
            <small class="text-uppercase font-weight-bold {{ app()->getLocale() == 'en' ? 'text-dark' : 'text-muted' }}">EN</small>
        </div>
    </div>
</nav>

