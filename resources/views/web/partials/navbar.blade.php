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
                @if(isset($dropdowns[$link->title]))
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $link->title }}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            @foreach($dropdowns[$link->title] as $item)
                                <a href="{{ $item->url }}" class="dropdown-item">{{ $item->title }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $link->url }}" class="nav-item nav-link">{{ $link->title }}</a>
                @endif
            @endforeach
        </div>
        <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Obtenga una cotización</a>
    </div>
</nav>

